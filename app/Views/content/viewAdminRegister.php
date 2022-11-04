<?= $this->extend('layout/templateUser'); ?>

<?= $this->section('content'); ?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Register Form</p>

                <form class="mx-1 mx-md-4" action="<?= base_url('signupadmin'); ?>" method="post">

                  <div class="d-flex flex-row align-items-center mb-2">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Name</label>
                      <input type="text" id="form3Example1c" class="form-control" name="username"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Email</label>
                      <input type="email" id="form3Example3c" class="form-control" name="email"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4c">Password</label>
                      <input type="password" id="form3Example4c" class="form-control" name="password"/>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>