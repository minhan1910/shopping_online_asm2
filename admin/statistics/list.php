<!-- Title  -->
<nav class="navbar navbar-expand-lg  my-4 py-3" id="navBar"
    style="border-radius: 5px; color: #fff; background-color: #000000;">
    <h3 style="font-size: 3vh; margin-left: 10px; height: 1vw;
    line-height: 1.5vw;">List Products</h3>
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
                    <th>ORDINAL NUMBERS</th>
                    <th>TYPE OF PRODUCT</th>
                    <th>QUANTITY</th>
                    <th>MAX PRICE</th>
                    <th>MIN PRICE</th>
                    <th>AVERAGE PRICE</th>
                </thead>
                <tbody id="tblDanhSachNguoiDung">
                    <tr>
                        <td>1</td>
                        <td>IPhone</td>
                        <td>1</td>
                        <td>10000</td>
                        <td>1000</td>
                        <td>5000</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Apple Watch</td>
                        <td>2</td>
                        <td>20000</td>
                        <td>1000</td>
                        <td>10000</td>
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