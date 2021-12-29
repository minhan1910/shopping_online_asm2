<?php 
    if(isset($_SESSION['insertAccountSuccess'])) {
        $notification = $_SESSION['insertAccountSuccess'];
        echo '
            <script>
                alert("' . $notification . '");
            </script>
        ';
        unset($_SESSION['insertAccountSuccess']);
    }
?>

<!-- Title  -->
<nav class="navbar navbar-expand-lg  my-4 py-3" id="navBar"
    style="border-radius: 5px; color: #fff; background-color: #000000;">
    <h3 style="font-size: 3vh; margin-left: 10px; height: 1vw;
    line-height: 1.5vw;">Customers</h3>
</nav>
<!-- End title -->

<!-- Add and search --> 
<div class="process">
    <div class="row">
        <div class="tblNguoiDung container" id="tblNguoiDung">
            <!-- BEGIN TABLE NGƯỜI DÙNG -->
            <table class="table table-bordered text-center" style="
                      font-size: 2vh; 
                    ">
                <thead style="background-color: #000000; color: #fff;">
                    <th>ID USER</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>PHONE</th>
                    <th>ROLE</th>
                    <th></th>
                </thead>
                <tbody id="tblDanhSachNguoiDung">
                    <?php 
                        foreach ($loadAllAccounts as $account) {
                            extract($account);
                            $role = (int)$role === 0 ? 'User' : 'Admin';
                            
                            //Thuật toán ở đây là khi click vào edit thì nó chuyển sang trang khác 
                            //nhưng vẫn có 1 cái ẩn để tự động click bật cái button lên
                            echo '
                                <tr>
                                    <td>' . $id . '</td>
                                    <td>' . $user .'</td>
                                    <td>' . $pass . '</td>
                                    <td>' . $email .'</td>
                                    <td>' . $address . '</td>
                                    <td>' . $tel . '</td>
                                    <td>' . $role .'</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <button id="'.$id.'"  
                                                class="btn text-light mr-2 d-none" 
                                                data-toggle="modal" 
                                                data-target="#myModalUpdate"
                                                style="background-color: #000000;
                                            ">
                                                hiddenEdit
                                            </button>

                                            <a href="index.php?action=showUpdateAccount&id='.$id.'"  class="btn text-light mr-2" 
                                            style="background-color: #000000;">
                                                    Edit
                                            </a>

                                            <a href="index.php?action=remove-account&id='.$id.'"  
                                                class="btn px-0" 
                                                style="background-color: #4e0000; color: #fff;">
                                                    Remove
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ';
                        }
                    ?>

                    <!-- 
                    <tr>
                        <td>2</td>
                        <td>kyhung</td>
                        <td>19102002</td>
                        <td>kyhung123@gmail.com</td>
                        <td>154/ABC tphcm</td>
                        <td>0916849012</td>
                        <td>user</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn text-light mr-2" data-toggle="modal" data-target="#myModalUpdate"
                                    style="background-color: #000000;">Edit</button>
                                <button class="btn px-0" style="background-color: #4e0000; color: #fff;">Remove</button>
                            </div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
            <!-- END TABLE NGƯỜI DÙNG -->
        </div>
    </div>
</div>

<?php 
    // include 'add.php';
    // include 'update.php';
?>