<!-- Start Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">ADD PRODUCT</h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <!-- Modal body -->
            <form action="index.php?action=add-products" method="POST" enctype="multipart/form-data">
                <div class="modal-body">     
                    <label>Select Category:</label>
                    <select class="form-group ml-2 px-2" name="category_id">
                        <?php 
                            foreach($loadAllCategory as $item) {
                                extract($item);
                                echo '
                                    <option value="' . $id . '" >' . $name . '</option>
                                ';
                            }
                        ?>
                    </select>
                    <div class="form-group">
                        <label>Product Name:</label>
                        <input id="productName" name="productName" class="form-control" placeholder="Enter Product Name" />
                        <p id="txtProductName" class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input id="price" name="price" class="form-control" placeholder="Enter Prices" type="text" />
                        <p id="txtProductPrice" class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <div class="custom-file">
                            <input type="file" class="file" data-show-preview="false" name="image">
                        </div>
                        <p id="txtImageProduct" class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
                        <p id="txtProductDescription" class="text-danger"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-dark text-light px-2" type="reset" value="Reset">
                    <input class="btn btn-dark text-light" type="submit" value="Add" name="addProduct">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MODAL -->