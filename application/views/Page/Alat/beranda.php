<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-tab">
                    <!-- Button -->
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <?php
                            foreach($tb_alat as $ta);
                            if ($ta->suara == 0) {
                                $suara = 'Mati';
                                $perintah = 1;
                            } else {
                                $suara = 'Nyala';
                                $perintah = 0;
                            }
                            
                        ?>
                        <ul class="nav nav-tabs" role="tablist">
                            <?= "<i class='mdi mdi-key'> </i> ".$ta->kode_alat?> |
                            <?= "<i class='mdi mdi-map-marker'> </i> ".$ta->lokasi?> |
                        </ul>    
                        <div>
                            <div class="btn-wrapper">
                                <!-- <?= $suara?> -->
                                <form action="updateperintah" method="post">
                                    <input type="int" name="id_alat" value="<?= $ta->id_alat?>" hidden>
                                    <input type="int" name="suara" value="<?= $perintah?>" hidden>
                                    <?php
                                        if ($suara == 'Mati') {
                                            echo "
                                                <button type='submit' class='text-white btn btn-danger' title='Klik untuk menyalakan'>
                                                <i class='mdi mdi-speaker-off'></i> Suara Sedang Mati
                                                </button>
                                            ";
                                        } else {
                                            echo "
                                            <button type='submit' class='text-white btn btn-success' title='Klik untuk mematikan'>
                                                <i class='mdi mdi-speaker-wireless'></i> Suara Sedang Nyala
                                            </button>
                                        ";
                                        }
                                        
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                            <!-- Grafik Sensor -->
                            <div class="row mt-2">
                                <div class="col-lg-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Grafik Sensor PH</h4>
                                            <canvas id="sensorPH-Chart-alat"></canvas>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Grafik Sensor Moisture</h4>
                                            <div class="row">
                                                <button class="col-3 col-lg-2 btn btn-primary btn-sm text-white">Basah</button>
                                                <button class="col-4 col-lg-2 btn btn-success btn-sm text-white">Normal</button>
                                                <button class="col-3 col-lg-2 btn btn-warning btn-sm text-white">Kering</button>
                                            </div>
                                            <canvas id="sensorMT-Chart-alat"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <!-- Tabel -->
                                    <div class="row flex-grow">
                                        <!-- PH Tanah -->
                                        <div class="col-lg-6 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Sensor PH Tanah</h4>
                                                        </div>
                                                    </div>

                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID Sensor</th>
                                                                    <th>Waktu</th>
                                                                    <th>PH</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            
                                                            <tbody>
                                                                <?php
                                                                foreach($tb_sensor as $ts){
                                                                ?>
                                                                <tr>
                                                                    <td><?= $ts->id_sensor?></td>  
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
                                                                </tr>
                                                                <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Moisture -->
                                        <div class="col-lg-6 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Sensor Moisture</h4>
                                                        </div>
                                                    </div>

                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID Sensor</th>
                                                                    <th>Waktu</th>
                                                                    <th>Moisture</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            
                                                            <tbody>
                                                                <?php
                                                                foreach($tb_sensor as $ts){
                                                                ?>
                                                                <tr>
                                                                    <td><?= $ts->id_sensor?></td>  
                                                                    <td><?= $ts->waktu?></td>  
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