<?php 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $getProductId = [];
        foreach ($loadAllProducts as $product) {
            if((int)$product['id'] === (int)$id) {
                $getProductId[] = $product;
            }
        }

        $getCategoryId = [];
        foreach ($loadAllCategory as $category) {
            if((int)$category['id'] === (int)$id) {
                $getCategoryId[] = $product;
            }
        }

        //loadCategoryByID là Assoc lấy id vs name luôn 
        $loadCategoryByID = load_category_by_id($getProductId[0]['category_id']);

        //Này của load All category
        // [0] => Array
        // (
        //     [id] => 21
        //     [0] => 21
        //     [name] => Gadget
        //     [1] => Gadget
        // )
    }

    include 'list.php';
?>

<script>
    window.onload = function() {
        let queryString  = window.location.search;;

        let indexEqualChacracter = queryString.lastIndexOf('=');

        let id = 0;
        if(indexEqualChacracter !== -1) {
            //Nó trích xuất từ vị trí start đến cuối luôn nếu ko có end
            // còn nếu có end thì phải index + 1
            id = queryString.slice(indexEqualChacracter + 1);
        }

        if(Number(id) !== 0) {
            document.getElementById(`${id}`).click();
            document.getElementById('container').onclick = (event) => {
                event.preventDefault();
                //redirect lại trang lúc nó chưa có id bằng cách gán lại 
                //cái url ở query string
                window.location.search = "action=products";
            }
        }
    }

</script>

<!-- Start Modal -->
<div class="modal fade" id="myModalUpdate">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">UPDATE PRODUCT</h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <!-- Modal body -->
            <form action="index.php?action=update-products" method="POST" enctype="multipart/form-data">
                <div class="modal-body">     
                    <label>Select Category:</label>
                    <select class="form-group ml-2 px-2" name="category_id">
                        <?php 
                            echo '
                                <option value="' . $loadCategoryByID['id'] . '" selected>' . $loadCategoryByID['name'] . '</option>
                            '; 
                            foreach($loadAllCategory as $item) {
                                if($getProductId[0]['category_id'] != $item['id']) {
                                    //id của category
                                    echo '
                                        <option value="' . $item['id'] . '" >' . $item['name'] . '</option>
                                    ';
                                }
                            }
                        ?>
                    </select>
                    <div class="form-group">
                        <label>Product Name:</label>
                        <input 
                            id          ="productName" 
                            name        ="productName" 
                            class       ="form-control" 
                            placeholder ="Enter Product Name" 
                            value       ="<?= $getProductId[0]['name'] ?>"
                        />
                        <p id="txtProductName" class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input 
                            id          ="price" 
                            name        ="price" 
                            class       ="form-control" 
                            placeholder ="Enter Prices" 
                            type        ="text" 
                            value       = "<?= $getProductId[0]['price'] ?>"
                        />
                        <p id="txtProductPrice" class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <div class="custom-file">
                            <input 
                            type                ="file" 
                            class               ="file" 
                            data-show-preview   ="false"
                            name="image"
                            
                            >
                        </div>
                        <p id="txtImageProduct" class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="10"><?= $getProductId[0]['description'] ?></textarea>
                        <p id="txtProductDescription" class="text-danger"></p>
                    </div>
                </div>
                <script>
                    function getProductId(id) {
                        document.cookie = `idUpdate=${id}`;
                    }
                </script>
                <div class="modal-footer">
                    <input type="hidden" name="id" value="<?= $getProductId[0]['id'] ?>">
                    <input class="btn btn-dark text-light px-2" type="reset" value="Reset">
                    <input class="btn btn-dark text-light" type="submit" value="Update" name="updateProduct">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MODAL -->