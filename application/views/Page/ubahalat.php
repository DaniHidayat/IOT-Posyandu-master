<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>    

                    <div>
                        <div class="btn-wrapper">
                        </div>
                    </div>
                </div>
                
                <div class="container col-lg-7 grid-margin stretch-card mt-4">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <form action="<?= base_url('Page/prosesubahalat')?>" method="post">
                            <?php
                                foreach($tb_alat as $ta);
                            ?>
                                <label for="id">ID Alat</label>
                                <input type="text"  class="col-12 form-control my-2" value="<?= $ta->id_alat?>" name="id" required>
                                
                                <label for="id">Kode Alat</label>
                                <input type="text"  class="form-control my-2" value="<?= $ta->kode_alat?>" name="kode" required>
                                
                                <label for="id">Kata Sandi</label>
                                <input type="password"  class="form-control my-2" value="<?= $ta->sandi_alat_deskripsi?>" name="sandi" required>
                                
                                <label for="id">Lokasi</label>
                                <input type="text"  class="form-control my-2" value="<?= $ta->lokasi?>" name="lokasi" required>
                                
                                <button type="submit" class="btn btn-success text-white my-2">Simpan</button>
                            </form>
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