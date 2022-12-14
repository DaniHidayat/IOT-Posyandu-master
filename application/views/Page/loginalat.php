  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-center py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url('../assets/images/logo.png')?>" alt="logo" width="100%">
              </div>
              <h4>Hello! Petani Terampil...</h4>
              <h6 class="fw-light">Masukan akun untuk melanjutkan</h6>
              <form class="pt-3" method="post" action="<?= base_url('Login/authalat'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="Kode Alat" name="kodealat">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" placeholder="password" name="sandi">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">
                    Masuk
                  </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <!-- <input type="checkbox" class="form-check-input">
                      Keep me signed in -->
                    </label>
                  </div>
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>