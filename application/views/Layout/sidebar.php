<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Page/tambahalat')?>">
                <i class="mdi mdi-plus-box menu-icon"></i>
                <span class="menu-title">Tambah Alat</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Page/dataalat')?>">
                <i class="mdi mdi-database menu-icon"></i>
                <span class="menu-title">Data alat</span>
            </a>
        </li>

        <li class="nav-item"> 
            <a class="nav-link bg bg-danger" href="<?= base_url('Login/logout')?>">
                <i class="menu-icon mdi mdi-run text-white"></i>
                <span class="menu-title text-white">Keluar</span>
            </a>
        </li>
    </ul>
</nav>