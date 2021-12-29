<?php 
  session_start();
  include 'model/pdo.php';
  include 'model/account.php';
  include 'model/product.php';

  /**
   * Check add cart success and add cart dupplicate
   */
  //* **********************************************************************
  //START CHECK ADD TO CART
  if(isset($_SESSION['addItemCartSuccess'])) {
    $notification = $_SESSION['addItemCartSuccess'];
    echo '
      <script>
          alert("' . $notification . '");      
      </script>
    ';
    unset( $_SESSION['addItemCartSuccess']); 
  }

  if(isset($_SESSION['isExistItemCart'])) {
    $notification = $_SESSION['isExistItemCart'];
    echo '
      <script>
          alert("' . $notification . '");      
      </script>
    ';
    unset( $_SESSION['isExistItemCart']); 
  }
  
  if(isset($_SESSION['needLoginToAddToItemCart'])) {
    $notification = $_SESSION['needLoginToAddToItemCart'];
    echo '
      <script>
          alert("' . $notification . '");      
      </script>
    ';
    unset($_SESSION['needLoginToAddToItemCart']); 
  }
  //END CHECK ADD TO CART
  //* **********************************************************************

  /**
   * **********************************************************************
   * New Feature Not done
   */
  //Cải thiện nếu như thêm vào sản phẩm thì lưu xuống DB
  //và nếu vào cái giỏ hàng đó thì vẫn còn trong giỏ hàng ko bị mất
  // nếu logout thì sẽ ra hoàn toàn mới và sẽ ko bị lưu xuống DB
  //* **********************************************************************

  /**
   * Reset session shopping_cart
   */
  // unset($_SESSION['shopping_cart']);  

  function processData($data) {
    $result    = [];
    $attribute = '';
    $values    = '';
    foreach ($data as $key => $value) {
      $attribute .= " ,{$key}";
      $values    .= " ,'{$value}'";
    }
    $result['attribute'] = substr($attribute, 2);
    $result['values']    = substr($values, 2);
    return $result;
  }

  if(isset($_GET['action'])) {
    $act = $_GET['action'];
    switch ($act) {
      case 'login':
        include 'view/Account/login.php';
        break;
      case 'processLogin':
        if(isset($_POST['login']) && isset($_POST['login'])) {
            $user = $_POST['username'];
            $pass = $_POST['password']; 
            
            $checkUser = check_user($user, $pass);
            if(is_array($checkUser)) {
                $_SESSION['user'] = $checkUser;
                header('Location: index.php');
            } else {
                $_SESSION['notification'] = 'Invalid Username or Password';
                include 'view/Account/login.php';
            }
        }
        break;

        case 'logout':
          session_unset();
          unset($_SESSION['user']);
          $_SESSION['notificationLogout'] = 'Logout Successfully !!!';
          header('Location: index.php');
          break;

        case 'register':
          include 'view/Account/register.php';
          break;

        case 'processRegister':
          if(isset($_POST['register']) && ($_POST['register'])) {
            $getData = [
              'user'          => $_POST['username'],
              'pass'          => $_POST['password'],
              'tel'           => $_POST['phone'],
              'email'         => $_POST['email'],
              'address'       => $_POST['address']
            ];

            $data = processData($getData);

            insert_account($data);
            $_SESSION['isRegister'] = 'Register Successfully !!!!';
            header('Location: index.php');
          } else {
            include 'view/Account/register.php';
          }
          break;

        case 'profile':
          if(isset($_SESSION['user'])) {
            $load_one_profile = load_one_profile($_SESSION['user']['id']);
          } else {
            $firstname    = '';
            $email        = '';
            $surname      = '';
            $country      = '';
            $tel          = '';
            $region       = '';
            $gender       = 0 ;
            $address      = '';
          }
          include 'view/profile/profile.php';
          break;

        case 'update-profiles':
          if(isset($_SESSION['user'])) {
            if(isset($_POST['saveProfile']) && ($_POST['saveProfile'])) {
              $firstname    = $_POST['firstname'];
              $surname      = $_POST['surname'];
              $country      = $_POST['country'];
              $phone        = $_POST['phone'];
              $region       = $_POST['region'];
              $gender       = $_POST['options'] === 'male' ? 0 : 1;
              $address      = $_POST['address'];
              $account_id   = $_SESSION['user']['id'];
              $hasProfile      = load_one_profile($account_id);
              // echo '<pre>';
              // print_r($hasProfile);
              if(is_array($hasProfile)) {
                update_profile($firstname, $surname, $country, $region, $account_id, $gender);
                update_account_phone_address($account_id, $phone, $address);
                
              } else {
                insert_profile($firstname, $surname, $country, $region, $account_id, $gender);
              }
              $_SESSION['isLoginProfile'] = 'Update profile successfully !!!';
            } else {
              header('Location: index.php?action=profile');    
            }
          } else {
            //Not need since u don't login in web and you can't see the profile
            $_SESSION['isLoginProfile'] = "Please login before updating profile !!";
          }
          // header('Location: index.php?action=profile');
          include 'view/profile/profile.php';
          break;


      /**
       * Shopping Cart
       */
      case 'addToCart':
        //Processing change value
        if(isset($_POST['changeQuantity']) && $_POST['changeQuantity'] === 'change') {
          //Nhớ phải có tham chiếu
          foreach($_SESSION['shopping_cart'] as &$value) {
            if($value['id'] === $_POST['code']) {
              $value['quantity'] = $_POST['quantity'];
              break;
            }
          }
        }

        //remove item from shopping cart
        if(isset($_POST['deleteItem'])) {
          if(!empty($_SESSION['shopping_cart'])) {
            foreach($_SESSION['shopping_cart'] as $key => $value) {
              if((int)$key === (int)$_POST['code']) {
                unset($_SESSION['shopping_cart'][$key]);
                echo '<script>
                  alert("Remove Item Successfully");
                </script>';
              }
              if(empty($_SESSION['shopping_cart'])) {
                unset($_SESSION['shopping_cart']);
              } 
            }
          }
        }

        //when clicking on checkout
        if(isset($_POST['submitCheckout'])) {
          if(isset($_SESSION['checkout'])) {
            echo '<script>
              alert("' . $_SESSION['checkout'] . '");
            </script>';
            unset( $_SESSION['checkout']);
            unset($_SESSION['shopping_cart']);
          }
        }

        include 'view/header.php';
        include 'view/cart/addToCart.php';
        break;

      case 'processAddToCart':
        include 'view/header.php';

        //load 1 thằng lên để add nó vào cái session shopping cart
        if(isset($_SESSION['user'])) {
          if(isset($_POST['submitAddCart']) && $_POST['submitAddCart'] === 'addCart') {
            $idItemCart    = $_POST['idAddCart'];
            $loadOneCart  = load_one_product($idItemCart);
            // Array
            // (
            //     [id] => 15
            //     [name] => CyberBeats
            //     [price] => 99.99
            //     [img] => product1.png
            //     [description] => Best beats 2021
            //     [view] => 0
            //     [category_id] => 18
            // )
  
            $name        = $loadOneCart['name'];
            $price       = $loadOneCart['price'];
            $img         = $loadOneCart['img'];
            // echo "<script>console.log($img)<script>";
            $description = $loadOneCart['description'];
            $cartArray   = [
              $idItemCart => [
                'id'          => $idItemCart,
                'name'        => $name,
                'price'       => $price,
                'img'         => $img,
                'description' => $description,
                'quantity'    => 1
              ]
            ];
  
            if(empty($_SESSION['shopping_cart'])) {
              $_SESSION['shopping_cart'] = $cartArray;
              $_SESSION['addItemCartSuccess'] = 'Add Item Cart Successfully !!!';
              header('Location: index.php');
            } else {
              //Check the cart item is exist
              $array_idItemCart = array_keys($_SESSION['shopping_cart']);
  
              if(in_array($idItemCart, $array_idItemCart)) {
                $_SESSION['isExistItemCart'] = "You have added the cart, please choose new cart !!!";
              } else {
                //add item cart to shopping cart
                $_SESSION['shopping_cart'][$idItemCart] = $cartArray[$idItemCart];
                //Chuyển nó xuống database bảng order - orderDetail
                //nên tạo thêm
                $_SESSION['addItemCartSuccess'] = 'Add Cart Successfully !!!';
              }
              header('Location: index.php');
            } 
          }
        } else {
          $_SESSION['needLoginToAddToItemCart'] = 'Please login before using feature !!!';
          if(isset($_SESSION['shopping_cart'])) {
            unset($_SESSION['shopping_cart']);
          }
          header('Location: index.php');
        }
        include 'view/body.php';
        
        include 'view/footer.php';
        break;

      case 'detail-item':
        if(isset($_GET['id'])) {
          $loadOneCart          = load_one_product($_GET['id']);
          $loadCategoryProducts = load_category_of_products($_GET['id']);
        }

        include 'view/detailItems/detailItems.php';
        break;

      default:
        include 'view/Account/login.php';
        break;
    }
  } else {
    include 'view/header.php';

    include 'view/body.php';
    
    include 'view/footer.php';
  }

?>