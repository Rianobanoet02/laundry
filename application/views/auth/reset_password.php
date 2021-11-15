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
                               <h4 class="card-title text-center">Reset Password</h4>
                               <?= $this->session->flashdata('message'); ?>
                               <form class="user" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                                   <div class="form-group">
                                    <div class="form-group">
                                       <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                       <label for="password">Password Baru
                                       </label>
                                       <input id="password" type="password" class="form-control" name="password" required data-eye>
                                   </div>                                    <div class="form-group">
                                       <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                       <label for="password">Konfirmasi Password
                                       </label>
                                       <input id="password" type="password" class="form-control" name="password" required data-eye>
                                   </div>
                                </div>

                                   <div class="form-group m-0">
                                       <button type="submit" class="btn btn-primary btn-block" value="Reset">
                                           Reset Password
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