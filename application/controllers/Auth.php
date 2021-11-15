<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('username')) {
            redirect('user');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('owner');
                    } else {
                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 2) {
                            redirect('admin');
                        } else {
                            $this->session->set_userdata($data);
                            if ($user['role_id'] == 3) {
                                redirect('kurir');
                            } else {
                                $this->session->set_userdata($data);
                                if ($user['role_id'] == 4) {
                                    redirect('home');
                                }
                            }
                        }
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum diaktifkan!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum terdaftar!</div>');
            redirect('auth');
        }
    }

    public function registrasi()
    {

        if ($this->session->userdata('username')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'username ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Password terlalu pendek'
        ]);


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth/footer', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'image' => ('default.jpg'),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'role_id' => 4,
                'is_active' => 1,
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()

                ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);
            $this->_sendEmail($token);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Berhasil logout!</div>');
        redirect('home');
    }


    public function blocked()
    {
        $this->load->view('auth/blocked');
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'nonambura10@gmail.com',
            'smtp_pass' => 'nosambu2207',
            'smpt_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"

        ];

        $this->email->initialize($config);

        $this->email->from('mburanona@gmail.com', 'Nona Mbura');
        $this->email->to($this->input->post('email'));

        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('CLick this link to reser your password : <a href="' . base_url(). 'auth/resetpassword?email='. $this->input->post('email'). '&token='. urlencode($token).'"Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if($this->form_validation->run() == false) {
            $data['title'] = 'Lupa Password';
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/forgot_password');
            $this->load->view('templates/auth/footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if($user) {
                $token = base64_encode(random_bytes(64));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()

                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token,'$forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Please Cek Email Kamu</div>');
            redirect('auth/forgotpassword');
            } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Email Belum Terdaftar Atau Belum Aktif!</div>');
            redirect('auth/forgotpassword');


            }
        }
        
    }

    public function resetPassword() 
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if($user_token) {
                $this->session->set_userdata('reset_email', $email); 
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Reset Password Gagal! token salah</div>');
            redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Reset Password Gagal! email salah</div>');
            redirect('auth');
        }
    }

    public function changePassword() 
    {
        if(!$this->session->userdata('reset_email')) {
            redirect('auth');
        }
        
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|match[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[3]|match[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/change_password');
            $this->load->view('templates/auth/footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->sessiom->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">Password Telah diubah! Silahkan Login</div>');
            redirect('auth');
        }
       
    }
}
