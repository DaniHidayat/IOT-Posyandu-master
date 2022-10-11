<!DOCTYPE html>
<html lang="en">



<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('Layout/V2/sidebar'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('Layout/V2/navbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Alat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID ALAT</th>
                                            <th>STATUS SENSOR ULTRASONIC</th>
                                            <th>KODE ALAT</th>
                                            <th>LOKASI</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID ALAT</th>
                                            <th>STATUS SENSOR ULTRASONIC</th>
                                            <th>KODE ALAT</th>
                                            <th>LOKASI</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach ($tb_alat as $ta) {
                                            if ($ta->suara == 0) {
                                                $suara = "<span class='btn btn-danger btn-sm text-white'>Suara Sedang Mati</span>";
                                            } else {
                                                $suara = "<span class='btn btn-success btn-sm text-white'>Suara Sedang Nyala</span>";
                                            }
                                        ?>
                                            <tr>
                                                <td><?= $ta->id_alat ?></td>
                                                <td><?= $suara ?></td>
                                                <td><?= $ta->kode_alat ?></td>
                                                <!-- <td><?= $ta->sandi_alat ?></td>   -->
                                                <td><?= $ta->lokasi ?></td>
                                                <td>
                                                    <a href="<?= base_url('Page/editalat/' . $ta->id_alat) ?>" class="btn btn-warning btn-sm">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->