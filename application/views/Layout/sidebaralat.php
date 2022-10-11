<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Pagealat/berandaalat')?>">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!--<li class="nav-item nav-category">Sensor</li>-->
        
        <!--<li class="nav-item">-->
        <!--    <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">-->
        <!--        <i class="menu-icon mdi mdi-chart-line"></i>-->
        <!--        <span class="menu-title">Grafik</span>-->
        <!--        <i class="menu-arrow"></i>-->
        <!--    </a>-->
        <!--    <div class="collapse" id="charts">-->
        <!--        <ul class="nav flex-column sub-menu">-->
        <!--            <li class="nav-item"> <a class="nav-link" href="#">Sensor PH Tanah</a></li>-->
        <!--            <li class="nav-item"> <a class="nav-link" href="#">Sensor Moisture</a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</li>-->

        <!--<li class="nav-item">-->
        <!--    <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">-->
        <!--    <i class="menu-icon mdi mdi-table"></i>-->
        <!--    <span class="menu-title">Tabel</span>-->
        <!--    <i class="menu-arrow"></i>-->
        <!--    </a>-->
        <!--    <div class="collapse" id="tables">-->
        <!--        <ul class="nav flex-column sub-menu">-->
        <!--            <li class="nav-item"> <a class="nav-link" href="#">Sensor PH Tanah</a></li>-->
        <!--            <li class="nav-item"> <a class="nav-link" href="#">Sensor Moisture</a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</li>-->

        <li class="nav-item nav-category">Laporan</li>
        
        <li class="nav-item">
            <a class="nav-link" href="laporan">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Bulanan</span>
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