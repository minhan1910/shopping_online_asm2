<!DOCTYPE html>
<html lang="en">
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
        <a class="navbar-brand" href="#">Online Shop</a>
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
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <div class="form-group d-flex align-items-center justify-content-center pt-2" id="btnHeader">
              <form action="#" method="POST">
                <button type="submit" class="btn btn-primary" style="width: 13vh;">
                  <a href="login.html">Login</a>
                </button>
                <button type="submit" class="btn btn-primary" style="width: 13vh;">
                  <a href="register.html">Register</a>
                </button>
                <button class="btn btn-primary" id="btnPhone-blue-header">
                  <i class="fa fa-shopping-cart"></i> 
                  <a href="addToCart.html">Shop</a>
                </button>
              </form>
            </div>
          </ul>
        </div>
      </nav>
    </header>

    <section class="phoneCarousel">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 d-flex align-items-center">
            <div>
              <h1>Online Shop</h1>
              <h3>Best Smartphone of 2021!</h3>
              <p>
                Cras tortor mi, lobortis quis ornare in, varius scelerisque
                urna. Vivamus imperdiet dolor nec odio convallis consequat.
              </p>
              <div>
                <button class="btnPhone-white mr-2">
                  <i class="fa fa-info-circle"></i> More Info
                </button>
                <button class="btnPhone-blue">
                  <i class="fa fa-shopping-cart"></i> Shop
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 d-md-block d-none">
            <img class="img-fluid" src="./img/product-header2.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="products container section">
      <h2 class="section-title">-Featured Products-</h2>
      <div class="products__content">
        <!-- Chỗ này render sản phẩm -->
        <div id="product_content" class="row"></div>
      </div>
    </section>
    
    <footer class="footerPhone">
      <img
        class="img-fluid footer__light"
        src="./img/angle-up-light.svg"
        alt=""
      />
      <img
        class="img-fluid footer__dark"
        src="./img/angle-up-dark.png"
        alt=""
      />
      <div class="container">
        <div class="row align-items-center">
          <div class="col-4">© 2021</div>
          <div class="col-8">
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

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

    <script src="./js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>
    <script src="./js/services/product-service.js"></script>
    <script src="./js/controllers/index.js"></script>
  </body>
</html>
