            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="<?= base_url('../assets/vendors/js/vendor.bundle.base.js')?>"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="<?= base_url('../assets/vendors/chart.js/Chart.min.js')?>"></script>
        <script src="<?= base_url('../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="<?= base_url('../assets/js/off-canvas.js')?>"></script>
        <script src="<?= base_url('../assets/js/hoverable-collapse.js')?>"></script>
        <script src="<?= base_url('../assets/js/template.js')?>"></script>
        <script src="<?= base_url('../assets/js/settings.js')?>"></script>
        <script src="<?= base_url('../assets/js/todolist.js')?>"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="<?= base_url('../assets/js/dashboard.js')?>"></script>
        <script src="<?= base_url('../assets/js/Chart.roundedBarCharts.js')?>"></script>
        <!-- Grafik Sensor PH -->
        <script>
            <?php 
                // Fungsi ManipulasiTanggal
                function manipulasiTanggal($tgl,$jumlah){
                    return date('Y-m-d', strtotime($jumlah.' days', strtotime($tgl)));
                }
                $id_alat = $this->session->userdata('id_alat');
                // Mendapatkan Tanggal sekarang
                // date_default_timezone_set('Asia/Jakarta');
                // $currentDate = date('Y-m-d');
                // $id_alat = 1;
                $terbaru = $this->db->query("SELECT MAX(waktu) AS terbaru FROM `tb_sensor` Where id_alat = $id_alat")->result();
                foreach($terbaru as $tgl);
                $currentDate = $tgl->terbaru;

                // Mendapatkan data hari ini
                $harinow = manipulasiTanggal($currentDate,'0');
                // Database
                $hariini = $this->db->query("SELECT * FROM `tb_sensor` WHERE waktu IN (SELECT MAX(waktu) FROM tb_sensor WHERE id_alat = $id_alat AND waktu LIKE '%$harinow%')")->result();
                foreach($hariini as $datanow);
                
                // Mendapatkan data h-1
                $hariminsatu = manipulasiTanggal($currentDate,'-1');
                // Database
                $hariminone = $this->db->query("SELECT * FROM `tb_sensor` WHERE waktu IN (SELECT MAX(waktu) FROM tb_sensor WHERE id_alat = $id_alat AND waktu LIKE '%$hariminsatu%')")->result();
                foreach($hariminone as $dataminone);

                // Mendapatkan data h-2
                $harimindua = manipulasiTanggal($currentDate,'-2');
                // Database
                $harimintwo = $this->db->query("SELECT * FROM `tb_sensor` WHERE waktu IN (SELECT MAX(waktu) FROM tb_sensor WHERE id_alat = $id_alat AND waktu LIKE '%$harimindua%')")->result();
                foreach($harimintwo as $datamintwo);

                // Mendapatkan data h-3
                $harimintiga = manipulasiTanggal($currentDate,'-3');
                // Database
                $harimintree = $this->db->query("SELECT * FROM `tb_sensor` WHERE waktu IN (SELECT MAX(waktu) FROM tb_sensor WHERE id_alat = $id_alat AND waktu LIKE '%$harimintiga%')")->result();
                foreach($harimintree as $datamintree);

                // Mendapatkan data h-4
                $hariminempat = manipulasiTanggal($currentDate,'-4');
                // Database
                $hariminfour = $this->db->query("SELECT * FROM `tb_sensor` WHERE waktu IN (SELECT MAX(waktu) FROM tb_sensor WHERE id_alat = $id_alat AND waktu LIKE '%$hariminempat%')")->result();
                foreach($hariminfour as $dataminfour);

                // Mendapatkan data h-5
                $hariminlima = manipulasiTanggal($currentDate,'-5');
                // Database
                $hariminfive = $this->db->query("SELECT * FROM `tb_sensor` WHERE waktu IN (SELECT MAX(waktu) FROM tb_sensor WHERE id_alat = $id_alat AND waktu LIKE '%$hariminlima%')")->result();
                foreach($hariminfive as $dataminfive);

                // Mendapatkan data h-6
                $hariminenam = manipulasiTanggal($currentDate,'-6');
                // Database
                $hariminsix = $this->db->query("SELECT * FROM `tb_sensor` WHERE waktu IN (SELECT MAX(waktu) FROM tb_sensor WHERE id_alat = $id_alat AND waktu LIKE '%$hariminenam%')")->result();
                foreach($hariminsix as $dataminsix);
                ?>
                console.log(<?= $id_alat?>);
                console.log("<?= $currentDate?>");
                console.log("<?= "ID Sensor :".$datamintree->id_sensor?>");
                console.log("<?= "ID Alat :".$datamintree->id_alat?>");
                console.log("<?= $datamintree->waktu?>");
                console.log("<?= $datamintree->ph?>");
            // Data
            var areaData = {
                labels: [

                    "<?= $dataminsix->waktu?>",
                    "<?= $dataminfive->waktu?>",
                    "<?= $dataminfour->waktu?>",
                    "<?= $datamintree->waktu?>",
                    "<?= $datamintwo->waktu?>",
                    "<?= $dataminone->waktu?>",
                    "<?= $datanow->waktu?>"
                ],
                datasets: [{
                    label: 'Sensor PH',
                    data: [

                        "<?= $dataminsix->ph?>",
                        "<?= $dataminfive->ph?>",
                        "<?= $dataminfour->ph?>",
                        "<?= $datamintree->ph?>",
                        "<?= $datamintwo->ph?>",
                        "<?= $dataminone->ph?>",
                        "<?= $datanow->ph?>"
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    fill: true, // 3: no fill
                }]
            };
            // Options
            var areaOptions = {
                plugins: {
                filler: {
                    propagate: true
                }
                }
            }
            // sensorPH-Chart
            if ($("#sensorPH-Chart-alat").length) {
                var areaChartCanvas = $("#sensorPH-Chart-alat").get(0).getContext("2d");
                var areaChart = new Chart(areaChartCanvas, {
                type: 'line',
                data: areaData,
                options: areaOptions
                });
            }
        </script>
        <!-- Grafik Sensor Moisture -->
        <script>
            // Data
            var bardata = {
                labels: [
                    "<?= $datanow->waktu?>"
                ],
                datasets: [{
                label: 'Moisture',
                data: [
                    "<?= $datanow->moisture?>"
                ],
                backgroundColor: [
                    <?php 
                        if ($datanow->moisture > 0  AND $datanow->moisture <= 400) {
                            // Basah -> Biru Muda
                            echo "'rgba(25, 201, 255, 0.3)'";
                        } elseif ($datanow->moisture > 400 AND $datanow->moisture <= 500){
                            // Normal -> Hijau
                            echo "'rgba(25, 255, 67, 0.3)'";
                        } elseif ($datanow->moisture > 500){
                            // Kering -> Coklat
                            echo "'rgba(255, 114, 13, 0.3)'";
                        }
                    ?>
                ],
                borderColor: [
                    <?php 
                        if ($datanow->moisture > 0  AND $datanow->moisture <= 400) {
                            // Basah -> Biru Muda
                            echo "'rgba(25, 201, 255, 1)'";
                        } elseif ($datanow->moisture > 400 AND $datanow->moisture <= 500){
                            // Normal -> Hijau
                            echo "'rgba(25, 255, 67, 1)'";
                        } elseif ($datanow->moisture > 500){
                            // Kering -> Coklat
                            echo "'rgba(255, 114, 13, 1)'";
                        }
                    ?>
                ],
                borderWidth: 1,
                fill: false
                }]
            };
            // Options
            var baroptions = {
                scales: {
                    yAxes: [{
                        ticks: {
                        beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                },
                elements: {
                    point: {
                        radius: 0
                    }
                }
            };
            // Get context with jQuery - using jQuery's .get() method.
            if ($("#sensorMT-Chart-alat").length) {
                var barChartCanvas = $("#sensorMT-Chart-alat").get(0).getContext("2d");
                // This will get the first returned node in the jQuery collection.
                var barChart = new Chart(barChartCanvas, {
                type: 'horizontalBar',
                data: bardata,
                options: baroptions
                });
            }
        </script>
        <!-- End custom js for this page-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('../assets/bootstrap/LandingPage/js/scripts.js')?>"></script>
    </body>

</html>