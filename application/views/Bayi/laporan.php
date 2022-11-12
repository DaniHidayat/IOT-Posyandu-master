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
                            <h6 class="m-0 font-weight-bold text-primary">Laporan </h6>
                        </div>


                        <div class="card-body">

                            <form action="<?php echo base_url('Bayi/cetak_laporan_excel'); ?>" method="POST">
                                <div class="form-group row d-flex justify-content-center">

                                    <div class="col-xs-3 mr-5">
                                        <label for="">Dari</label>
                                        <input type="date" name="awal" class="form-control">
                                    </div>


                                    <div class="col-xs-8">
                                        <label for="">sampai</label>
                                        <input type="date" name="akhir" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="mx-auto" >
                                        <button type="submit" class="btn btn-primary "><i class="fa fa-print"> Cetak</i></button>
                                    </div>
                                    <!-- <div class="mx-auto">
                                        <button type="submit" class="btn btn-primary "><i class="fa fa-print"> Cetak</i></button>
                                    </div> -->
                                </div>


                            </form>



                        </div>
                    </div>

                </div>
            </div>

            <script src="<?php echo base_url('../assets/sb2/'); ?>vendor/jquery/jquery.min.js"></script>