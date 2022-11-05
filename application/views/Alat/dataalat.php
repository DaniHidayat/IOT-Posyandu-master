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
                            <h6 class="m-0 font-weight-bold text-primary">Data Alat</h6>
                        </div>

                        <div class="card-body">
                            <div style="margin-bottom: 5px">
                                <a href="#" data-toggle="modal" data-target="#alatAdd" class="btn btn-primary btn-icon-split">

                                    <span class="text">Tambah Alat</span>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table id="table_alat" class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID ALAT</th>
                                            <th>KODE ALAT</th>
                                            <th>LOKASI</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>


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
                                <form class="form-horizontal" action="<?php echo base_url() . 'Alat/prosesubahalat' ?>" method="post" enctype="multipart/form-data">
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
                                                <input type="text" name="lokasi" class="form-control" id="inputUserName" value="<?php echo $ta->lokasi; ?>" placeholder="Lokasi Alat" required>
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
            <script src="<?php echo base_url('../assets/sb2/'); ?>vendor/jquery/jquery.min.js"></script>
            <script>
                $(document).ready(function() {

                    show();
                });

                function show() {

                    var i = 1;
                    $('#table_alat').DataTable({
                        "order": [],
                        "ajax": {
                            url: "<?= base_url() ?>Alat/showAlat",
                        },
                        "columns": [

                            {
                                "data": 'id_alat'
                            },
                            // {
                            //     "data": null,
                            //     "render": function(data, type, row, meta) {
                            //         switch (data.suara) {
                            //             case "0":
                            //                 return `<span class='
                            //                 btn btn-danger btn-sm text-white '>Suara Sedang Mati</span>`;
                            //                 break;

                            //             default:
                            //                 return  `<span class='
                            //                 btn btn-success btn-sm text-white '>Suara Sedang Nyala</span>`;
                            //         }
                            //     }
                            // },
                            {
                                "data": 'kode_alat'
                            },
                            {
                                "data": 'lokasi'
                            },
                            {
                                "data": null,
                                "render": function(data, type, row, meta) {
                                data = `<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalEdit` + data.id_alat + `">Edit </a>`;
                                    return data;
                                }
                            },

                        ]
                    });
                }
            </script>