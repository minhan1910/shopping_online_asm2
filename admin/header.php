<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- BS 4 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

    <!-- Source Sans 3 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,400;0,600;0,700;1,500&display=swap" rel="stylesheet">

    <!-- FONT AWESOME  -->
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body id="body">
    <div class="container">
        <!-- Start header -->
        <nav class="navbar navbar-light mt-2" style="border-radius: 5px; background-color: #000000;">
            <span class="navbar-brand m-2 h1" style="color: white; font-size: 4vh;">Admin</span>
        </nav>
        <!-- End  Header-->

        <!-- Start Navbar -->
        <div class="navigation__bar" style="border-radius: 5px;">
            <nav class="navbar navbar-expand-lg my-3" id="navBar" >
                <div class="navbar-nav" id="nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="index.php?action=category">Category</a>
                    <a class="nav-link" href="index.php?action=products">Products</a>
                    <a class="nav-link" href="index.php?action=customers">Customers</a>
                    <a class="nav-link" href="index.php?action=comments">Comments</a>
                    <a class="nav-link" href="index.php?action=statistics">Statistics</a>
                    <a class="nav-link" href="index.php?action=listOrders">List Orders</a>
                    <a class="nav-link" href="index.php?action=logout">Logout</a>
                </div>
            </nav>
        </div>
        <!-- End Navbar -->