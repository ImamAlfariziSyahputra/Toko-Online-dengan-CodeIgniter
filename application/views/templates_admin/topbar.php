<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <ul class="nav navbar-nav navbar-right">
                    <?php if ($this->session->userdata('username')) : ?>
                        <li>
                            <div class="">Selamat Datang <?= $this->session->userdata('username'); ?></div>
                        </li>
                        <li class="ml-2">
                            <a href="<?= base_url('auth/logout') ?>">Logout</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?= base_url('auth/login') ?>">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>

            </ul>

        </nav>
        <!-- End of Topbar -->