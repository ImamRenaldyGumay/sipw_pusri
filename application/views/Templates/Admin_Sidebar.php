
<?php
$segment1 = $this->uri->segment(1);
$segment2 = $this->uri->segment(2);
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('Admin')?>" class="brand-link">
    <img src="<?= base_url('assets/img/logo-pusri.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">SIPW PUSRI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?= site_url('Admin')?>" class="nav-link <?= ($segment1 == 'Admin' && $segment2 == "") ? 'active': ""; ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('Pegawai')?>" class="nav-link <?= ($segment1 == 'Pegawai' && $segment2 == "") ? 'active': ""; ?>">
                    <i class="nav-icon fas fa-user-alt"></i>
                    <p>Pegawai</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= site_url('Workshop')?>" class="nav-link <?= ($segment1 == 'Workshop' && $segment2 == "") ? 'active': ""; ?>">
                    <i class="nav-icon fas fa-user-alt"></i>
                    <p>Workshop</p>
                </a>
            </li>
            <li class="nav-header">LABELS</li>
            <li class="nav-item <?= ($this->uri->uri_string() == 'Ruangan' || $this->uri->uri_string() == 'Departemen' || $this->uri->uri_string() == 'Instruktur') ? 'menu-open' : "" ?>">
                <a class="nav-link <?= ($this->uri->uri_string() == 'Ruangan' || $this->uri->uri_string() == 'Departemen' || $this->uri->uri_string() == 'Instruktur') ? 'active' : "" ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Master Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url('Instruktur')?>" class="nav-link <?= ($this->uri->uri_string() == 'Instruktur') ? 'active': "" ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Instruktur</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Ruangan')?>" class="nav-link <?= ($this->uri->uri_string() == 'Ruangan') ? 'active': "" ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ruangan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('Departemen')?>" class="nav-link <?= ($this->uri->uri_string() == 'Departemen') ? 'active': "" ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Departemen</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-header">USER</li>
            <li class="nav-item">
                <a href="<?= base_url('User')?>" class="nav-link <?= ($segment1 == 'User' && $segment2 == "") ? 'active': "" ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Users</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
