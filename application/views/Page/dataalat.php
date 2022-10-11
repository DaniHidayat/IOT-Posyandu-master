<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>    

                    <div>
                        <div class="btn-wrapper">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="tab-content tab-content-basic">
                                <div class="table-responsive">
                                    <table class="table select-table">
                                        <thead>
                                            <tr>
                                                <th>ID Alat</th>
                                                <th>Status Sensor Ultrasonic</th>
                                                <th>Kode Alat</th>
                                                <!-- <th>Sandi</th> -->
                                                <th>Lokasi</th>
                                                <th class="col-lg-1">Aksi</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                            foreach($tb_alat as $ta){
                                                if ($ta->suara == 0) {
                                                    $suara = "<span class='btn btn-danger btn-sm text-white'>Suara Sedang Mati</span>";
                                                } else {
                                                    $suara = "<span class='btn btn-success btn-sm text-white'>Suara Sedang Nyala</span>";
                                                }
                                            ?>
                                            <tr>
                                                <td><?= $ta->id_alat?></td>  
                                                <td><?= $suara?></td>  
                                                <td><?= $ta->kode_alat?></td>  
                                                <!-- <td><?= $ta->sandi_alat?></td>   -->
                                                <td><?= $ta->lokasi?></td>  
                                                <td>
                                                    <a href="<?= base_url('Page/editalat/'.$ta->id_alat)?>" class="btn btn-warning btn-sm">
                                                        Edit
                                                    </a>
                                                </td>  
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. TANTRAM.ID.</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->