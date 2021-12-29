<!-- Title  -->
<nav class="navbar navbar-expand-lg  my-4 py-3" id="navBar"
    style="border-radius: 5px; color: #fff; background-color: #000000;">
    <h3 style="font-size: 3vh; margin-left: 10px; height: 1vw;
    line-height: 1.5vw;">List Orders</h3>
</nav>
<!-- End title -->

<!-- Add and search -->
<div class="process">
    <div class="row">
        <div class="col-md-4">
            <!-- BEGIN TÌM KIẾM -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter id orders" id="txtSearch" />
                <div class="input-group-append">
                    <span class="input-group-text text-light" id="basic-addon2" style="
                        background-color: #fff; 
                        border: 3px solid #000000;
                        cursor: pointer;
                    ">
                        <i class="fa fa-search" style="color: #4e0000;"></i>
                    </span>
                </div>
            </div>
            <!-- END TÌM KIẾM -->
        </div>
        <div class="tblNguoiDung container" id="tblOrders">
            <!-- BEGIN TABLE NGƯỜI DÙNG -->
            <table class="table table-bordered" style="
                      font-size: 2vh; 
                    ">
                <thead style="background-color: #000000; color: #fff;">
                    <th>ORDINAL NUMBERS</th>
                    <th>ID ORDERS</th>
                    <th>INFORMATION CUSTOMERS</th>
                    <th>ORDER TIME</th>
                    <th>QUANTITY PRODUCTS</th>
                    <th>TOTAL ORDERS</th>
                    <th>STATUS</th>
                    <th></th>
                </thead>
                <tbody id="verticalOrders">
                    <tr>
                        <td>0</td>
                        <td>41</td>
                        <td>
                                <strong>Name:</strong> minhan2002
                                <br>
                                <strong>Email:</strong> annogo123@gmail.com
                                <br>
                                <strong>Address:</strong> 15 ABCDEFGH1232
                                <br>
                                <strong>Tel:</strong> 916849011
                                <br>
                                <strong>PTTT:</strong> 1
                        </td>
                        <td>10:17:03am 11/12/2021</td>
                        <td>1</td>
                        <td>123</td>
                        <td>New Order</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <!-- <button class="btn text-light mr-2" data-toggle="modal" data-target="#myModalUpdate"
                                    style="background-color: #000000;">Edit</button> -->
                                <button class="btn px-0" style="background-color: #4e0000; color: #fff;">Remove</button>
                            </div>
                        </td>
                    </tr>
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