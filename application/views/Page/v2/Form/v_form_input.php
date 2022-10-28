<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('Layout/V2/head') ?>


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
                <div class="container-fluid mx-auto">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 ">FORM INPUT</h1>

                    <form class="mx-auto">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kode ANAK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Kode ANAK" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Anak</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Nama Anak" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ibu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Nama Ibu" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Berat Badan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Berat Badan" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Tinggi Badan" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Suhu Anak</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Suhu Anak" disabled>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Add Modal-->


            <script src="<?php echo base_url('../assets/sb2/'); ?>vendor/jquery/jquery.min.js"></script>