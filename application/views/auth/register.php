<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="<?= base_url('auth/register') ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Lengkap">
                                    <div class="text-danger ml-3 small"><?= form_error('nama'); ?></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" id="exampleInputEmail" placeholder="Username">
                                    <div class="text-danger ml-3 small"><?= form_error('username'); ?></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password1" placeholder="Password">
                                        <div class="text-danger ml-3 small"><?= form_error('password1'); ?></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password2" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar!
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/login') ?>">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>