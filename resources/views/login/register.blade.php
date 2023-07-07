<!DOCTYPE html>
<html lang="en">

    @include('layout.header')

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form>
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>No telepon</label>
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="No telepon"
                        placeholder="No telepon">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="Email"
                          placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="Alamat"
                          placeholder="Alamat">
                      </div>
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="Jenis kelamin"
                          placeholder="Jenis kelamin">
                      </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label>Ulangi Password</label>
                      <input type="password" class="form-control" id="UlanginPassword"
                        placeholder="Ulangin password">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <hr>
                    {{-- <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Register with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                    </a> --}}
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="login">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>