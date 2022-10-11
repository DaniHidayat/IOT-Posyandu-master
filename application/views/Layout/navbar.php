<div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            
            <div class="col-6 col-lg-6">
                <a class="navbar-brand brand-logo" href="#">
                    <img src="<?= base_url('../assets/images/logo.png')?>" alt="logo" class="h-100"/>
                </a>
                <!-- <a class="navbar-brand brand-logo-mini" href="index.html">
                    <img src="<?= base_url('../assets/images/logo.png')?>" alt="logo" sizes="1000pt"/>
                </a> -->
            </div>
        </div>

        <div class="navbar-menu-wrapper d-flex align-items-top"> 
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text">Selamat Datang Di, <span class="text-black fw-bold">Tantram.ID</span></h1>
                    <h3 class="welcome-sub-text">Website Monitoring</h3>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-account-circle"></i>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-sm rounded-circle" src="<?= base_url('../assets/images/logo.png')?>" alt="Profile image">
                            <p class="fw-light text-muted mb-0"><?= $this->session->userdata('nama')?></p>
                            <p class="fw-light text-muted mb-0"><?= $this->session->userdata('username')?></p>
                        </div>
                        <a href="<?= base_url('Login/logout')?>" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Keluar</a>
                    </div>
                </li>
            </ul>

            <!-- Menu -->
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <!-- partial -->