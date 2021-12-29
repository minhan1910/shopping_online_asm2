<?php 
    //ở đây nó đã có loadAllAccounts => bỏ vào cái chỗ
    //case ở index.php là được
    // echo '<pre>';
    // print_r($loadAllAccounts);
    // echo '</pre>';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $getAccountId = [];
        foreach ($loadAllAccounts as $account) {
            if((int)$account['id'] === (int)$id) {
                $getAccountId[] = $account;
            }
        }
    }
    /**
     * Array(
     * [0] => Array
     *   (
     *       [id] => 3
     *       [0] => 3
     *       [user] => john
     *       [1] => john
     *       [pass] => 123456
     *       [2] => 123456
     *       [email] => thao240167@yahoo.com.vn
     *       [3] => thao240167@yahoo.com.vn
     *       [address] => thành phố hồ chí minh
     *       [4] => thành phố hồ chí minh
     *       [tel] => 123456
     *       [5] => 123456
     *       [role] => 0
     *       [6] => 0
     *   )
     *  )
     */

     //Load a list for prototype page products
    include 'list.php';
?>

<script>
    window.onload = function () {
        let queryString  = window.location.search;
        
        let indexEqualChacracter = queryString.lastIndexOf('=');

        let id = 0;
        if(indexEqualChacracter !== -1) {
            //+ 1 để bỏ qua cái vị trí hiện tại là dấu =
            id = queryString.slice(indexEqualChacracter + 1);
        }
        //khi nào cái URL nó có thì xài
        if(Number(id) !== 0) {
            document.getElementById(`${id}`).click();
            // document.getElementById('test').onclick = (event) => {
            //     event.preventDefault();
            //     //redirect lại trang lúc nó chưa có id bằng cách gán lại 
            //     //cái url ở query string
            //     window.location.search = "action=customers";
            // }
        }  
    }
</script> 

<!-- Start Modal -->
<div class="modal fade" id="myModalUpdate">
    <div class="modal-dialog" >
        <div class="modal-content" >
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">UPDATE CUSTOMER</h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <!-- Modal body -->
            <form action="index.php?action=processUpdate" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username: </label>
                        <input 
                            id="Username" 
                            class="form-control" 
                            placeholder="Enter Username"
                            name="username"
                            value="<?= $getAccountId[0]['user'] ?>" 
                        />
                        <p id="txtUsername" class="text-danger"></p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Password: </label>
                        <input 
                            id="Password" 
                            class="form-control" 
                            placeholder="Enter Password" 
                            name="password"
                            value="<?= $getAccountId[0]['pass'] ?>"
                        />
                        <p id="txtPassword" class="text-danger"></p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email: </label>
                        <input 
                            id="Email" 
                            class="form-control" 
                            placeholder="Enter Email" 
                            name="email"
                            value="<?= $getAccountId[0]['email'] ?>"
                        />
                        <p id="txtEmail" class="text-danger"></p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Address: </label>
                        <input 
                            id="Address" 
                            class="form-control" 
                            placeholder="Enter Address" 
                            name="address"
                            value="<?= $getAccountId[0]['address'] ?>"
                        />
                        <p id="txtAddress" class="text-danger"></p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Phone Number: </label>
                        <input 
                            id="phone" 
                            class="form-control" 
                            placeholder="Enter Phone Number"
                            name="tel"
                            value="<?= $getAccountId[0]['tel'] ?>" 
                        />
                        <p id="txtPhone" class="text-danger"></p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Role: </label>
                        <input 
                            id="Role" 
                            class="form-control" 
                            placeholder="Enter Role" 
                            name="role"
                            value="<?php 
                                echo $getAccountId[0]['role'] = (int)$getAccountId[0]['role'] === 0 ? "User" : "Admin";
                            ?>"
                        />
                        <p id="txtRole" class="text-danger"></p>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id" value="<?= $getAccountId[0]['id'] ?>">
                    <input class="btn btn-dark text-light px-2" type="reset" value="Reset" name="reset">
                    <input class="btn btn-dark text-light" type="submit" value="Update" name="updateAccount">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MODAL -->
