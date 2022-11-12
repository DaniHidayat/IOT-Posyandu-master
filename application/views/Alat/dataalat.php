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

                                <div class="col-xs-3">
                                    <a href="#" data-toggle="modal" data-target="#Add" class="btn btn-primary btn-icon-split">

                                        <span class="text">Tambah</span>
                                    </a>
                                </div>

                                <!-- <div class="col-xs-4">
                                    <select id="id_Posyandu" class="custom-select">
                                        <option value="all">Pilih Posyandu</option>

                                        <?php foreach ($tbl_alat as $ta) : ?>
                                            <option value="<?php echo $ta->kode_alat; ?>"><?php echo $ta->lokasi; ?></option>


                                        <?php endforeach; ?>
                                    </select>
                                </div> -->
                            </div>


                            <div class="table-responsive">
                                <table id="table_bayi" class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>KODE ALAT</th>
                                            <th>NAMA POSYANDU</th>
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
            <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alat</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="<?php echo base_url() . 'Alat/prosestambah' ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kode Alat</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="kode" class="form-control" id="inputUserName" placeholder="Kode Alat" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Posyandu</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="nama_posyandu" class="form-control" id="inputUserName" placeholder="Nama Posyandu" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Lokasi</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="lokasi" class="form-control" id="inputUserName" placeholder="Lokasi" required>
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
                                <form class="form-horizontal" action="<?php echo base_url() . 'Alat/prosesubah' ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">Kode Alat</label>
                                            <div class="col-sm-12">
                                                <input type="hidden" value="<?php echo $ta->id_alat; ?>" name="id_alat">
                                                <input type="text" value="<?php echo $ta->kode_alat; ?>" name="kode" readonly class="form-control" id="inputUserName" placeholder="Kode Alat" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">Nama Posyandu</label>
                                            <div class="col-sm-12">
                                                <input type="text" value="<?php echo $ta->nama_posyandu; ?>" name="nama_posyandu" class="form-control" id="inputUserName" placeholder="Nama Posyandu" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">Lokasi</label>
                                            <div class="col-sm-12">
                                                <input type="text" value="<?php echo $ta->lokasi; ?>" name="lokasi" class="form-control" id="inputUserName" placeholder="Lokasi" required>
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
                    $("#id_Posyandu").change(function() {
                        $('#id_Posyandu').val($(this).val());
                        $('#table_bayi').DataTable().ajax.reload();

                    });
                });


                function show() {

                    var i = 1;
                    $('#table_bayi').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "pageLength": 50,
                        "ordering": true, // Set true agar bisa di sorting
                        "order": [
                            [0, 'asc']
                        ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
                        "ajax": {
                            "url": "<?php echo base_url('Alat/showAlat') ?>", // URL file untuk proses select datanya
                            "type": "POST",
                            'data': function(data) {
                                // Read values
                                var id_alat = $('#id_Posyandu').val();


                                // Append to data
                                data.id_alat = id_alat;

                            }
                        },
                        "deferRender": true,
                        "aLengthMenu": [
                            [50, 100, 500],
                            [50, 100, 500]
                        ], // Combobox Limit
                        "columns": [



                            {
                                "data": 'kode_alat'
                            },
                            {
                                "data": 'nama_posyandu'
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