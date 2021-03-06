<?php 
    session_start();
    include 'header.php';
    include '../model/pdo.php';
    include '../model/category.php';
    include '../model/product.php';
    include '../model/account.php';

    function processData($data) {
      $result    = [];
      $attribute = '';
      $values    = '';
      foreach ($data as $key => $value) {
        $attribute .= " , {$key}";
        $values    .= " , '{$value}'";
      }
      $result['attribute'] = substr($attribute, 2);
      $result['values']    = substr($values, 2);
      return $result;
    }

    if(isset($_GET['action'])) {
      $act = $_GET['action'];
      switch ($act) {
        case 'add-category':
          if(isset($_POST['addCategory']) && ($_POST['addCategory'])) {
            $categoryName= $_POST['categoryName'];
            insert_category($categoryName);
          }
          header('Location: index.php?action=category');
          break;

        case 'remove-category':
          if(isset($_GET['id']) && ($_GET['id'])) {
            $id = $_GET['id'];
            remove_category($id);
          }
          header('Location: index.php?action=category');
          break;

        case 'update-category':
          if(isset($_POST['updateCategory']) && ($_POST['updateCategory'])) {
            $idUpdate = $_COOKIE['idUpdate'];
            $name     = $_POST['categoryName'];
            update_category($idUpdate, $name);
          }
          
          header('Location: index.php?action=category');
          break;

        //Show categories 
        case 'category':
          $loadAllCategory = load_all_categories();
          include 'category/list.php';
          break;
        
        case 'showUpdateCategory':
          $loadAllCategory = load_all_categories();
          include 'category/update.php';
          break;
        case 'search-category':
          if($_POST['categoryKeyword']) {
            $keyword = $_POST['categoryKeyword'];
          }
          $loadAllCategory = load_all_categories($keyword);
          include 'category/list.php';
          break;
        
          /**
           * Products
           */
        case 'add-products':
          if(isset($_POST['addProduct']) && ($_POST['addProduct'])) {
            $getData = [
              'name'          => $_POST['productName'],
              'price'         => $_POST['price'],
              'img'           => $_FILES['image']['name'],
              'description'   => $_POST['description'],
              'category_id'   => $_POST['category_id']
            ];
            
            $data = processData($getData);
            $target_dir     = '../upload/';
            $target_file    = $target_dir . basename($_FILES['image']['name']);

            if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file));
            insert_product($data);
          }

          header('Location: index.php?action=products');
          break;

        //Validation cho n?? full l?? ???????c
        //kh??ng ???????c ????? tr???ng t???m th???i ho??n th??nh ch???c n??ng nh?? v???y
        case 'update-products':
          if(isset($_POST['updateProduct']) && ($_POST['updateProduct'])) {
            $id             = $_POST['id'];
            $productName    = $_POST['productName'];
            $img            = $_FILES['image']['name'];
            $price          = $_POST['price'];
            $description    = $_POST['description'];
            $category_id    = $_POST['category_id'];
            
            $target_dir     = '../upload/';
            $target_file    = $target_dir . basename($_FILES['image']['name']);
            number_format($price, 2);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file));
            update_product($id, $category_id, $productName, $price, $description, $img);
          }

          header('Location: index.php?action=products');
          // include 'index.php?action=products';
          break;

        case 'remove-products':
          if(isset($_GET['id']) && ($_GET['id'])) {
            $id = $_GET['id'];
            remove_product($id);
          }
          header('Location: index.php?action=products');
          break;
        
        //Show products
        case 'products':
          $loadAllProducts = load_all_products();
          $loadAllCategory = load_all_categories();
          include 'products/list.php';
          break;
        
          //show products update
          //trick
        case 'showUpdateProduct':
          $loadAllProducts = load_all_products();
          $loadAllCategory = load_all_categories();

          include 'products/update.php';
          break;
        
        case 'search-products':
          // if(isset($_POST['searchKeyword']) && ($_POST['searchKeyword'])) {
          //   echo 1;
          //   $keyword = $_POST['productKeyword'];
          // } else {
          //   $keyword = '';
          // }
          if($_POST['productKeyword']) {
            $keyword = $_POST['productKeyword'];
          }
          $loadAllProducts = load_all_products($keyword);
          include 'products/list.php';
          break;
            
        /**
         * Account
         */
        case 'customers':
          $loadAllAccounts = load_all_accounts();
          include 'customers/list.php';
          break; 
          
        case 'showUpdateAccount':
          $loadAllAccounts = load_all_accounts();

          include 'customers/processUpdate.php';
          break;

        case 'processUpdate':
          //Nh??? include v??o v?? khi b???m v??o edit n?? c??ng chuy???n v??o ????y  
          if(isset($_POST['updateAccount']) && ($_POST['updateAccount'])) {
            $id      = $_POST['id'];
            $user    = $_POST['username'];
            $pass    = $_POST['password'];
            $email   = $_POST['email'];
            $address = $_POST['address'];
            $tel     = $_POST['tel'];
            $role    = $_POST['role'] === 'User' ? 0 : 1;
            update_account($id, $user, $pass, $email, $address, $tel, $role);
            $_SESSION['insertAccountSuccess'] = "Update Account Successfully !!";
          }
          header('Location: index.php?action=customers');
          break;
        
        case 'remove-account':
          if(isset($_GET['id'])) {
            delete_account($_GET['id']);
          }
          header('Location: index.php?action=customers');
          break;

        case 'logout':
          if($_SESSION['user']) {
            session_unset();
            header('Location: ../index.php');
          }
          break;

        case 'comments':

          include 'comments/list.php';
          break;

        case 'statistics':

          include 'statistics/list.php';
          break;
        
        case 'listOrders':
          
          include 'listOrders/list.php';
          break;

        default:
          include 'home.php';
          break;
      }
    } else {
      include 'home.php';
    }
    include 'footer.php';

