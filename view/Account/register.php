<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
  
<section class="vh-200" style="background-color: #2779e2;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-9">
  
          <h1 class="text-white mb-4">Register</h1>
  
          <div class="card" style="border-radius: 15px;">
            <form action="index.php?action=processRegister" method="POST">
              <div class="card-body">
                  <div class="row align-items-center pt-4 pb-3">
                      <div class="col-md-3 ps-5">
                        <h6 class="mb-0">Username</h6>
                      </div>
                      <div class="col-md-9 pe-5">
                        <input type="text" class="form-control form-control-lg" placeholder="Enter Username" name="username"/>
                      </div>
                  </div>

                  <hr class="mx-n3">

                  <div class="row align-items-center pt-4 pb-3">
                      <div class="col-md-3 ps-5">
                        <h6 class="mb-0">Password</h6>
                      </div>
                      <div class="col-md-9 pe-5">
                        <input type="password" class="form-control form-control-lg" placeholder="Enter password" name="password"/>
                      </div>
                  </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                      <input type="text" class="form-control form-control-lg" placeholder="Enter Phone Number" name="phone"/>
                  </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                    <input type="email" class="form-control form-control-lg" placeholder="example@example.com" name="email"/>
                  </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-md-9 pe-5">
                      <input type="text" class="form-control form-control-lg" placeholder="Enter Address" name="address"/>
                  </div>
                </div>

                <hr class="mx-n3">

                <div class="px-5 py-4">
                    <!-- <button type="submit" class="btn btn-primary btn-lg">
                      <a style="color: aliceblue; text-decoration: none;" href="index.php?action=processRegister" name="register">Register</a>
                    </button> -->
                    <div class="row">
                      <div class="col-md-2">
                          <div class="form-group">
                            <input  class="btn btn-primary mb-2" style="color: aliceblue; padding: 11px 0 13px 0 !important; font-weight: 700;" type="submit" value="Register" name="register">
                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg px-4">
                                    <a style="color: aliceblue; text-decoration: none;" href="index.php?action=login">login</a>
                              </button>
                          </div>
                      </div>
                      <div class="col-md-2">
                          <button type="submit" class="btn btn-primary btn-lg px-4">
                            <a style="color: aliceblue; text-decoration: none;" href="index.php">Home</a>
                          </button>
                      </div>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Thư viện hỗ trợ jquery -->
  <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"
></script>
<!-- BS4 JS -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
  crossorigin="anonymous"
></script>
</body>
</html>