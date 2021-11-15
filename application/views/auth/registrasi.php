<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="card-header bg-transparent border-bottom-0 pb-0 text-center">
          <img src="<?= base_url();?>assets/img/super.png" width="250px" class="img-circle">
        </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Register</h4>
                            <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <div>
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">No Telepon</label>
                                    <div>
                                        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="No.Handphone" value="<?= set_value('telepon'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Alamat</label>
                                    <div>
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type=" text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="mohon isikan alamat penjemputan lengkap" value="<?= set_value('alamat'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Username</label>
                                    <div>
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type=" text" class="form-control form-control-user" id="username" name="username" placeholder="username" value="<?= set_value('username'); ?>">
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <label for="password">Alamat Email</label>
                                    <div>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="" value="<?= set_value('email'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required data-eye>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Sudah jadi member? <a href="<?= base_url('auth') ?>">Login</a>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="<?= base_url('auth/forgotpassword') ?>">Lupa Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>