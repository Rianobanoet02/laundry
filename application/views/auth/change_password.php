   <body class="my-login-page">
       <section>
           <div>
               <div class="row justify-content-md-center h-100">
                   <div>
                       <div>
                       </div>
                       <div>
                           <div class="card-body">
                            <div class="card-body">
                            <div class="card-header bg-transparent border-bottom-0 pb-0 text-center">
          <img src="<?= base_url();?>assets/img/super.png" width="300px" class="img-circle">
        </div>
                               <h4 class="card-title text-center">Change Password </h4>
                               <h5><?= $this->session->userdata('reset_email'); ?></h5>
                               <?= $this->session->flashdata('message'); ?>
                               <form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
                                   <div class="form-group">
                                    <label for="password">Password Baru</label>
                                    <div>
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="masukan password baru">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Email</label>
                                    <div>
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="masukan password baru">
                                    </div>
                                </div>


                                   <div class="form-group m-0">
                                       <button type="submit" class="btn btn-primary btn-block">
                                           Change Password
                                       </button>
                                   </div>
                                   <div class="mt-4 text-center">
                                       <a href="<?= base_url('auth') ?>">Kembali Ke Login</a>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>