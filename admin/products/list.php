<!-- Title  -->
<nav class="navbar navbar-expand-lg  my-4 py-3" id="navBar"
    style="border-radius: 5px; color: #fff; background-color: #000000;">
    <h3 style="font-size: 3vh; margin-left: 10px; height: 1vw;
    line-height: 1.5vw;">Products</h3>
</nav>
<!-- End title -->

<!-- Add and search -->
<div class="process">
    <div class="row">
        <div class="col-md-8">
            <!-- BEGIN BUTTOM THÊM MỚI -->
            <button id="btnThemNguoiDung" class="btn" data-toggle="modal" data-target="#myModal"
                style="
                    color: #000000; 
                    background-color: #fff;
                    border:3px solid #4e0000;
                 ">
                <i class="fa fa-plus mr-1"></i>
                Add Product
            </button>
            <!-- END BUTTON THÊM MỚI -->
        </div>

        <!-- BEGIN TÌM KIẾM -->
        <div class="col-md-4">
            <form action="index.php?search-products" method="post">
                <div class="input-group mb-3">
                    <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Enter products" 
                        id="txtSearch" 
                        name="productKeyword" 
                    />

                    <div class="input-group-append">
                        <button     
                            type="submit" 
                            class="btn"  
                            style="
                                background-color: #fff;
                                border: 3px solid #000000;
                                cursor: pointer;
                                height: 38px !important;
                            "
                            name="searchKeyword"
                        >
                            <i class="fa fa-search" style="color: #4e0000;"></i>    
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- END TÌM KIẾM -->

        <div class="tblNguoiDung container" id="tblNguoiDung">
            <!-- BEGIN TABLE NGƯỜI DÙNG -->
            <table class="table table-bordered text-center" style="
                        font-size: 2vh; 
                    ">
                <thead style="background-color: #000000; color: #fff;">
                    <th>PRODUCT CODE</th>
                    <th>NAME</th>
                    <th>IMAGE</th>
                    <th>PRICE</th>
                    <th>VIEW</th>
                    <th></th>
                </thead>
                <tbody id="tblDanhSachNguoiDung">
                    <?php 
                        foreach ($loadAllProducts as $product) {
                            extract($product);
                            $deleteProduct = 'index.php?action=remove-products&id=' . $id;
                            $imagePath = '../upload/'.$img;
                            $image = (is_file($imagePath)) ? "<img src='$imagePath' height='80'>" : "no photo";
                            echo '
                                <tr>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . $image .'</td>
                                    <td> '. $price . '</td>
                                    <td>0</td>
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

                                            <a href="index.php?action=showUpdateProduct&id='.$id.'"  class="btn text-light mr-2" 
                                            style="background-color: #000000;">
                                                    Edit
                                            </a>


                                            <a href="' . $deleteProduct . '">
                                                <input class="btn px-0" style="background-color: #4e0000; color: #fff;" type="button" value="Remove">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
            <!-- END TABLE NGƯỜI DÙNG -->
        </div>
    </div>
</div>

<?php 
    include 'add.php';
?>