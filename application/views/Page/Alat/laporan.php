<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <div>
                            <h4>Laporan Data Sensor</h4>
                        </div>
                    </div>

                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                            <!-- Grafik Sensor -->
                            <div class="row mt-2">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- <h4 class="card-title"></h4> -->
                                            <form action="../Laporan/buatlaporan" method="POST">
                                                <div class="row">
                                                    <input type="text" class="form-control col-4 ml-5 mr-3"  name="id_alat" value="<?= $this->session->userdata("id_alat")?>" hidden>
                                                    <input type="date" class="form-control col-4 ml-5 mr-3" title="Dari tanggal"  name="dari">
                                                    <input type="date" class="form-control col-4 mr-4" title="Sampai tanggal" name="sampai">
                                                    <button type="submit" class="btn btn-primary text-white col-2 ">
                                                        <i class="mdi mdi-send"></i>
                                                    </button>
                                                </div>
                                            </form>
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