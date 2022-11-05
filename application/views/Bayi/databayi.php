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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Bayi</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="<?php echo base_url() . 'Bayi/prosestambah' ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kode Bayi</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="kode" class="form-control" id="inputUserName" placeholder="Kode Bayi" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Anak</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="nama_anak" class="form-control" id="inputUserName" placeholder="Nama Anak" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-12">
                                            <input type="date" name="tanggal_lahir" class="form-control" id="inputUserName" placeholder="Tanggal Lahir" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Berat Badan</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="berat_badan" class="form-control" id="inputUserName" placeholder="Berat Badan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tinggi Badan</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="tinggi_badan" class="form-control id=" inputUserName" placeholder="Tinggi Badan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Suhu Anak</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="suhu_anak" class="form-control id=" inputUserName" placeholder="Suhu Anak" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Lingkar Lengan</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="lingkar_lengan" class="form-control" id="inputUserName" placeholder="Lingkar Lengan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Lingkar Kepala</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="lingkar_kepala" class="form-control" id="inputUserName" placeholder="Lingkar Kepala" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Ayah</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="nama_ayah" class="form-control" id="inputUserName" placeholder="Nama Ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Ibu</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="nama_ibu" class="form-control" id="inputUserName" placeholder="Nama Ibu" required>
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

            <?php foreach ($tb_anak as $ta) : ?>

                <div class="modal fade" id="ModalEdit<?php echo $ta->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            "url": "<?php echo base_url('Bayi/showBayi') ?>", // URL file untuk proses select datanya
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
                                "data": 'id_anak'
                            },
                            {
                                "data": 'kode_anak'
                            },
                            {
                                "data": 'nama_anak'
                            },
                            {
                                "data": 'tanggal_lahir'
                            },
                            {
                                "data": 'berat_badan'
                            },
                            {
                                "data": 'tinggi_badan'
                            },
                            {
                                "data": 'suhu_anak'
                            },
                            {
                                "data": 'lingkar_lengan'
                            },
                            {
                                "data": 'lingkar_kepala'
                            },
                            {
                                "data": 'nama_ayah'
                            },
                            {
                                "data": 'nama_ibu'
                            },

                            {
                                "data": null,
                                "render": function(data, type, row, meta) {
                                    data = `<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalEdit` + data.id + `">Edit </a>`;
                                    return data;
                                }
                            },

                        ]
                    });
                }
            </script>