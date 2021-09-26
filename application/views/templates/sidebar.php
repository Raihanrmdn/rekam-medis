<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/index'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-hospital-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Klinik <br> Dr RIA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Home
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($this->uri->segment(2) == "index") {
                            echo "active";
                        } ?>">
        <a class="nav-link" href="<?= base_url('admin/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <li class="nav-item <?php if ($this->uri->segment(2) == "pasien") {
                            echo "active";
                        } ?>">
        <a class="nav-link" href="<?= base_url('admin/pasien'); ?>">
            <i class="fas fa-fw fa-user-injured"></i>
            <span>Patients</span></a>
    </li>

    <li class="nav-item <?php if ($this->uri->segment(2) == "rekamMedis") {
                            echo "active";
                        } ?>">
        <a class="nav-link" href="<?= base_url('admin/rekamMedis'); ?>">
            <i class="fas fa-fw fa-book-medical"></i>
            <span>Medical Records</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item <?php if ($this->uri->segment(2) == "adminProfil") {
                            echo "active";
                        } ?>">
        <a class="nav-link" href="<?= base_url('admin/adminProfil'); ?>">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Profile</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php if ($this->uri->segment(2) == "adminEdit") {
                            echo "active";
                        } ?>">
        <a class="nav-link" href="<?= base_url('admin/adminEdit'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <li class="nav-item <?php if ($this->uri->segment(2) == "gantiPassword") {
                            echo "active";
                        } ?>">
        <a class="nav-link" href="<?= base_url('admin/gantiPassword'); ?>">
            <i class="fas fa-fw fa-key"></i>
            <span>Change Password</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->