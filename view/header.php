<?php 
  // Alert logout register successffully
  if(isset($_SESSION['notificationLogout'])) {
    $logout = $_SESSION['notificationLogout'];
    echo '<script>
      alert("'.$logout.'");
    </script>';
    unset($_SESSION['notificationLogout']);
  }

  //Show alert register successfully
  if(isset($_SESSION['isRegister'])) {
    $notification = $_SESSION['isRegister'];
    echo '<script>
      alert("'.$notification.'");
    </script>';
    unset($_SESSION['isRegister']);
  }
?>


<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Shop</title>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- BS4 CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>

  <body>
    <!-- SIDEBAR MINI -->
    <div class="sidebarMini">
      <button class="sidebarMini__button">
        <i class="fa fa-cog"></i>
      </button>
      <div class="sidebarMini__content">
        <h2>Choose Mode</h2>
        <div class="d-flex">
          <span>Light</span>
          <label class="switch" for="checkbox">
            <input type="checkbox" name="" id="checkbox" />
            <div class="slider"></div>
          </label>
          <span>Dark</span>
        </div>
      </div>
    </div>

    <header>
      <nav class="phoneNav container navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Online Shop</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#phoneNavbar"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="phoneNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <div class="form-group d-flex align-items-center justify-content-center pt-2" id="btnHeader">
              <?php 
                //check count_cart
                $amountOfItemCarts = 0; 
                if(!empty($_SESSION['shopping_cart'])) {
                  $amountOfItemCarts = count(array_keys($_SESSION['shopping_cart']));
                }
                // Start Header login
                if(isset($_SESSION['user'])) {
                  extract($_SESSION['user']);
                  /**
                   * Attribute In $_SESSON['user']
                   * Array 
                   *   (
                   *       [id] => 1
                   *       [user] => minhan
                   *       [pass] => 2002
                   *       [email] => annogo123@gmail.com
                   *       [address] => 154/ ABC
                   *       [tel] => 916849011
                   *       [role] => 0
                   *   )
                   */

                  $loginAdmin = '';
                  if((int)$role === 1) {
                    $loginAdmin = '
                      <button type="submit" class="btn btn-primary ml-2" style="width: 13vh;">
                        <a style="color: #fff;" href="admin/index.php">Go Admin</a>
                      </button>
                    ';
                  } 
                  

                  echo '
                    <button type="submit" class="btn btn-danger mr-2" style="width: 13vh; border: none;">
                      <a style="color: #fff;" href="index.php?action=profile">'.$user.'</a>
                    </button>
                    <button type="submit" class="btn btn-primary mr-2" style="width: 13vh;">
                      <a style="color: #fff;" href="index.php?action=logout">Logout</a>
                    </button>
                    <button class="btn btn-primary div-icon-cart" id="btnPhone-blue-header">
                        <i class="fa fa-shopping-cart"></i> 
                        <span class="icon-cart">' . $amountOfItemCarts . '</span>
                        <a href="index.php?action=addToCart" class="ml-2">Cart</a>
                    </button>
                    ' . $loginAdmin . '
                  ';
                } else {
              ?>
                <form action="#" method="POST">
                  <button type="submit" class="btn btn-primary" style="width: 13vh;">
                    <a href="index.php?action=login">Login</a>
                  </button>
                  <button type="submit" class="btn btn-primary" style="width: 13vh;">
                    <a href="index.php?action=register">Register</a>
                  </button>
                  <button class="btn btn-primary div-icon-cart" id="btnPhone-blue-header">
                    <i class="fa fa-shopping-cart"></i>   
                    <span class="icon-cart"><?= $amountOfItemCarts ?></span>
                    <!-- Cho cái if ở đây nêu như có item thì nó sẽ echo 
                        ra cái ml-2
                  -->
                    <a href="index.php?action=addToCart" class="ml-2">Cart</a>
                  </button>
                </form>
              <?php 
                } //End Header Login
              ?>
            </div>
          </ul>
        </div>
      </nav>
    </header>