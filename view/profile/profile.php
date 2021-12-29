<?php 
    if(isset($_SESSION['isLoginProfile'])) {
        $notification = $_SESSION['isLoginProfile'];
        echo '
            <script>
                alert("' . $notification . '")
            </script>
        ';
        unset($_SESSION['isLoginProfile']);
    }

//     Array
// (
//     [id] => 2
//     [email] => annogo123@gmail.com
//     [address] => 154/ ABC
//     [tel] => 916849011
//     [firstname] => an
//     [surname] => minha
//     [country] => vietnam
//     [region] => 111
//     [gender] => 0
// )
    $load_one_profile = load_one_profile($_SESSION['user']['id']);
    if($load_one_profile !== -1) {
        extract($load_one_profile);
    } else  {
        $firstname    = '';
        $email        = '';
        $surname      = '';
        $country      = '';
        $tel          = '';
        $region       = '';
        $gender       = 0 ;
        $address      = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- BS4 CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <!-- FONT AWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img 
                    class="rounded-circle mt-5"
                    src="img/trend-avatar-1.jpg" style="width: 100%; height: 30vh; object-fit: cover;">
                    <span class="font-weight-bold mt-2"><?= $firstname . " " . $surname ?></span>
                    <span class="text-black-50"><?= $email ?></span>
                    <span></span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <form action="index.php?action=update-profiles" method="post">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="first name" name="firstname" value="<?= $firstname ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Surname</label>
                                <input type="text" class="form-control" placeholder="surname" name="surname" value="<?= $surname ?>">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter phone number" name="phone" value="<?= $tel ?>">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" placeholder="Enter address" name="address" value="<?= $address ?>">
                            </div>
                            <div class="col-md-12 pt-3 d-flex pb-0">
                                <div class="form-group pb-0">
                                    <label class="labels mr-3" style="font-size: 2.5vh;">Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="options" value="male" 
                                            <?php if((int)$gender === 0) echo 'checked'; ?>
                                        >
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="options" value="female"
                                            <?php if((int)$gender === 1) echo 'checked'; ?>
                                        >
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="col-md-6">
                                <label class="labels">Country</label>
                                <input type="text"
                                    class="form-control" placeholder="country" value="<?= $country ?>" name="country">
                                </div>
                            <div class="col-md-6">
                                <label class="labels">State/Region</label>
                                <input type="text" class="form-control" value="<?= $region ?>" placeholder="state" name=region>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <input 
                                class="btn btn-primary profile-button" 
                                type="submit"
                                value="Save Profile"
                                name="saveProfile"
                            >
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <!-- Start Close Profile -->
                <button type="button" class="close" data-dismiss="modal">
                        <a href="index.php" style="text-decoration: none;">x</a>
                </button>
                <!-- End Close Profile -->

                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span style="font-size: 2.5vh;">Status Account</span>
                        <span class=" px-3 p-1 add-experience">
                            <a 
                            href="index.php" 
                            style="
                                    text-decoration: none; 
                                    "
                            >Shopping Now</a>
                        </span>
                    </div> 

                    <?php 
                        if($_SESSION['user']) {
                            echo '
                                <br>
                                <div class="form-group border d-flex flex-column justify-content-center align-items-center" style="height: 14rem;">
                                    <a href="index.php?action=addToCart" style="text-decoration: none; font-size: 3vh;">My Order</a>
                                    <a href="index.php?action=logout" style="text-decoration: none; font-size: 3vh;">logout</a>
                                </div>
                            ';
                        } else {
                    ?>
                        <!-- Start Login -->
                        <br>
                        <div class="form-group border" style="height: 14rem;">
                            <form action="index.php?action=loginProfile" method="post">
                                <div class="col-md-12">
                                    <label class="label" >Username</label>
                                    <input type="text" class="form-control" placeholder="Username" value="">
                                </div> 
                                <br>
                                <div class="col-md-12 pb-3">
                                    <label class="label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" value="">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class=" ml-3" >
                                            <a href="#" style="text-decoration: none;">Forgot your pass?</a>
                                        </div>
                                        
                                        <div class="mr-3 login" >
                                            <input class="px-2" type="submit" value="Login">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End login -->
                    <?php 
                        }
                    ?>
                    <div class="form-group border d-flex justify-content-center align-items-center" style="height: 12rem;">
                        <h5>This Feature Is Coming Soon</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
</body>

</html>