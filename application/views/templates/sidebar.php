<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Toko Online</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('user') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kategori
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori/elektronik') ?>">
            <i class="fas fa-fw fa-tv"></i>
            <span>Elektronik</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori/fashionpria') ?>">
            <i class="fas fa-fw fa-tshirt"></i>
            <span>Pakaian Pria</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori/fashionwanita') ?>">
            <i class="fas fa-fw fa-tshirt"></i>
            <span>Pakaian Wanita</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori/fashionanak') ?>">
            <i class="fas fa-fw fa-tshirt"></i>
            <span>Pakaian Anak-Anak</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori/sports') ?>">
            <i class="far fa-fw fa-futbol"></i>
            <span>Pakaian Olahraga</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->