<!-- partial -->
<!-- <div class="main-panel"> -->
    <div class="content-wrapper mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <div class="container text-center">
                            <h4>Laporan Data Sensor</h4>
                        </div>
                    </div>

                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                            <!-- Grafik Sensor -->
                            <div class="row mt-2">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive  mt-1">
                                                <table class="table select-table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID Sensor</th>
                                                            <th>Waktu</th>
                                                            <th>PH</th>
                                                            <th>Status PH</th>
                                                            <th>Moisture</th>
                                                            <th>Status Moisture</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        <?php
                                                        foreach($tb_sensor as $ts){
                                                        ?>
                                                        <tr>
                                                            <td>SNSR-<?= $ts->id_sensor?></td>  
                                                            <td><?= $ts->waktu?></td>  
                                                            <td><?= $ts->ph?></td>  
                                                            <td><?php
                                                                if ($ts->ph > 0  AND $ts->ph <= 6) {
                                                                    // Asam -> Biru Muda
                                                                    echo "<span class='text-white btn btn-primary btn-xs' >Asam</span>";
                                                                } elseif ($ts->ph > 6 AND $ts->ph <= 8){
                                                                    // Netral -> Hijau
                                                                    echo "<span class='text-white btn btn-success btn-xs'>Netral</span>";
                                                                } elseif ($ts->ph > 8){
                                                                    // Basa -> Coklat
                                                                    echo "<span class='text-white btn btn-warning btn-xs' >Basa</span>";
                                                                }
                                                            ?></td>
                                                            <td><?= $ts->moisture?></td>  
                                                            <td><?php
                                                                if ($ts->moisture > 0  AND $ts->moisture <= 400) {
                                                                    // Basah -> Biru Muda
                                                                    echo "<span class='text-white btn btn-primary btn-xs' >Basah</span>";
                                                                } elseif ($ts->moisture > 400 AND $ts->moisture <= 500){
                                                                    // Normal -> Hijau
                                                                    echo "<span class='text-white btn btn-success btn-xs'>Normal</span>";
                                                                } elseif ($ts->moisture > 500){
                                                                    // Kering -> Coklat
                                                                    echo "<span class='text-white btn btn-warning btn-xs' >Kering</span>";
                                                                }
                                                            ?></td>  
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
        </div>
    </div>
<!-- </div> -->
<!-- main-panel ends -->
<!-- Perintah Print -->
<!-- <script>
    window.print();
</script> -->