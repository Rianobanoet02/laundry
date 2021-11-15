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
                               <h4 class="card-title">Login</h4>
                               <?= $this->session->flashdata('message'); ?>
                               <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                   <div class="form-group">
                                       <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                       <label for="username">Username</label>
                                       <input id="username" type="text" class="form-control" name="username" value="<?= set_value('username'); ?>" required autofocus>
                                   </div>

                                   <div class="form-group">
                                       <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                       <label for="password">Password
                                       </label>
                                       <input id="password" type="password" class="form-control" name="password" required data-eye>
                                   </div>

                                   <!--<div class="form-group">
                                       <div class="custom-checkbox custom-control">
                                           <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                           <label for="remember" class="custom-control-label">Remember Me</label>
                                       </div>
                                   </div>-->

                                   <div class="ml-4">
                                       <button type="submit" class="btn btn-primary col-sm-6">
                                           Login
                                       </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       <a class="reset_pass col-mt-4" href="<?= base_url('auth/forgotpassword') ?>">Lupa password?</a>
                                   </div>
                                   <div class="mt-4 text-center">
                                       Belum jadi member? <a href="<?= base_url('auth/registrasi') ?>">Registrasi Sekarang</a>
                                       <br>
                                       Tidak ingin <strong>Login/Registrasi?</strong> Bisa Via <strong>Whatsapp</strong> <a href="https://api.whatsapp.com/send?phone=+62852 3800 4653&text=Hai., Super Laundry!!">0852-3800-4653</a>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>