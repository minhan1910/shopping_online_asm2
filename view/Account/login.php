
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- BS 4 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card mx-5 my-5">
            <div class="card-body py-3 px-3">
                <div class="modal-header" style="border-bottom: none !important;">
                    <h2 class="card-heading px-3">Log In</h2>
                    <button type="button" class="close" data-dismiss="modal">
                        <a href="index.php">x</a>
                    </button>
                </div>
                <form action="index.php?action=processLogin" method="post">
                    <div class="row rone mx-3 my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputUsername" class="sr-only">Username</label>
                                <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="row rtwo mx-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input  class="btn btn-primary mb-2" style="color: aliceblue;" type="submit" value="login"  name="login">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <button  type="submit" class="btn btn-primary mb-2">
                                    <a style="color: aliceblue;" href="index.php?action=register">Register</a>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><a href="#" class="forgot">Forgot your Password?</a></div>
                        </div>
                            <?php   
                                if(isset($_SESSION['notification'])) {
                                    // echo 'in session notification';
                                    $notification = $_SESSION['notification'];
                                    echo '<script>
                                        alert("' . $notification . '");
                                    </script>';
                                    unset($_SESSION['notification']);
                                }
                            ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
</php>