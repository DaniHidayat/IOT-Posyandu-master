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
                            <div style="margin-bottom: 5px">
                                <a href="#" data-toggle="modal" data-target="#alatAdd" class="btn btn-primary btn-icon-split">

                                    <span class="text">Tambah Alat</span>
                                </a>
                            </div>

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
                                                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $ta->id_alat; ?>">
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
            <!-- Add Modal-->
            <div class="modal fade" id="alatAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="<?php echo base_url() . 'Page/prosestambahalat' ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kode Alat</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="kode" class="form-control" id="inputUserName" placeholder="Kode Alat" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Sandi Alat</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="sandi" class="form-control" id="inputUserName" placeholder="Sandi Alat" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Lokasi Alat</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="lokasi" class="form-control" id="inputUserName" placeholder="Lokasi Alat" required>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php foreach ($tb_alat as $ta) : ?>

                <div class="modal fade" id="ModalEdit<?php echo $ta->id_alat; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="<?php echo base_url() . 'Page/prosesubahalat' ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">Id Alat</label>
                                            <div class="col-sm-12">


                                                <input type="text" name="id" readonly class="form-control" id="inputUserName" value="<?php echo $ta->id_alat; ?>" placeholder="Id Alat" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">Kode Alat</label>
                                            <div class="col-sm-12">


                                                <input type="text" name="kode" class="form-control" id="inputUserName" value="<?php echo $ta->kode_alat; ?>" placeholder="Kode Alat" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">Sandi Alat</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="sandi" class="form-control" id="inputUserName" value="<?php echo $ta->sandi_alat_deskripsi; ?>" placeholder="Sandi Alat" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">Lokasi Alat</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="lokasi" class="form-control" id="inputUserName" value="<?php echo $ta->lokasi; ?>"  placeholder="Lokasi Alat" required>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>