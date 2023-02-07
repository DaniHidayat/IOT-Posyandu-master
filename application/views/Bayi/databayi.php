<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('Layout2/head') ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('Layout2/sidebar'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('Layout2/navbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data </h6>
                        </div>


                        <div class="card-body">


                            <div class="form-group row d-flex justify-content-between">

                                <!-- <div class="col-xs-3">
                                    <a href="#" data-toggle="modal" data-target="#alatAdd" class="btn btn-primary btn-icon-split">

                                        <span class="text">Tambah</span>
                                    </a>
                                </div> -->

                                <div class="col-xs-4">
                                    <select id="id_Posyandu" class="custom-select">
                                        <option value="all">Pilih Posyandu</option>

                                        <?php foreach ($tbl_alat as $ta) : ?>
                                            <option value="<?php echo $ta->kode_alat; ?>"><?php echo $ta->lokasi; ?></option>


                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>


                            <div class="table-responsive">
                                <table id="table_bayi" class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>KODE ANAK</th>
                                            <th>NAMA ANAK</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>BERAT BADAN</th>
                                            <th>TINGGI BADAN</th>
                                            <th>SUHU ANAK</th>
                                            <th>LINGKAR LENGAN</th>
                                            <th>LINGKAR KEPALA</th>
                                            <th>NAMA AYAH</th>
                                            <th>NAMA IBU</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($tb_anak as $ta) : ?>
                                        <tr>
                                        <td><?php echo $ta->id_anak; ?></td>
                                        <td><?php echo $ta->kode_anak; ?></td>
                                        <td><?php echo $ta->nama_anak; ?></td>
                                        <td><?php echo $ta->tanggal_lahir; ?></td>
                                        <td><?php echo $ta->berat_badan; ?></td>
                                        <td><?php echo $ta->tinggi_badan; ?></td>
                                        <td><?php echo $ta->suhu_anak; ?></td>
                                        <td><?php echo $ta->lingkar_lengan; ?></td>
                                        <td><?php echo $ta->lingkar_kepala; ?></td>
                                        <td><?php echo $ta->nama_ayah; ?></td>
                                        <td><?php echo $ta->nama_ibu; ?></td>
                                        <td>
                                            
                                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalEdit<?php echo $ta->id_anak; ?>">Edit </a></td>
                                        </tr>

                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                <?php foreach ($tb_anak as $ta) : ?>

<div class="modal fade" id="ModalEdit<?php echo $ta->id_anak; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="<?php echo base_url() . 'Bayi/prosesubah' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Kode Bayi</label>
                            <div class="col-sm-12">
                                <input type="hidden" value="<?php echo $ta->id_anak; ?>" name="id_anak">
                                <input type="text" value="<?php echo $ta->kode_anak; ?>" name="kode" readonly class="form-control" id="inputUserName" placeholder="Kode Bayi" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Berat Badan</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?php echo $ta->berat_badan; ?>" name="berat_badan" class="form-control" id="inputUserName" placeholder="Berat Badan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tinggi Badan</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?php echo $ta->tinggi_badan; ?>" name="tinggi_badan" class="form-control" id="inputUserName" placeholder="Tinggi Badan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Suhu Anak</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?php echo $ta->suhu_anak; ?>" name="suhu_anak" class="form-control" id="inputUserName" placeholder="Suhu Anak" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Lingkar Lengan</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?php echo $ta->lingkar_lengan; ?>" name="lingkar_lengan" class="form-control" id="inputUserName" placeholder="Lingkar Lengan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Lingkar Kepala</label>
                            <div class="col-sm-12">
                                <input type="text" value="<?php echo $ta->lingkar_kepala; ?>" name=" lingkar_kepala" class="form-control" id="inputUserName" placeholder="Lingkar Kepala" required>
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