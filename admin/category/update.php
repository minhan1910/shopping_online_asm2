<?php 
    if(isset($_GET['id'])) {
        $idCategory = $_GET['id'];
        
        $getCategoryId = [];
        foreach ($loadAllCategory as $category) {
            if((int)$category['id'] === (int)$idCategory) {
                $getCategoryId[] = $category;
            }
        }
    }

    include 'list.php';
?>

<script>
    window.onload = () => {
        let queryString      = window.location.href;
        let lastIndexOfEqual = queryString.lastIndexOf('=');
        let id = 0;
        if(lastIndexOfEqual !== -1)  {
             id           = queryString.slice(lastIndexOfEqual + 1);
        }
        if(Number(id) !== 0) {
            document.getElementById(`${id}`).click();
        }
    }
</script>
<!-- Start Modal -->
<div class="modal fade" id="myModalUpdate">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">UPDATE CATEGORY</h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <!-- Modal body -->
            <form action="index.php?action=update-category" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Category Name: </label>
                        <input type="hidden" name="idUpdate" value="<?= $idCategory ?>">
                        <input id="categoryName" class="form-control" placeholder="Enter Name Category" name="categoryName" value="<?= $getCategoryId[0]['name']?>"/>
                        <p id="txtCategoryName" class="text-danger"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-dark text-light px-2" type="reset" value="Reset" name="reset">
                        <!--  -->
                    <input class="btn btn-dark text-light" type="submit" value="Update" name="updateCategory">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MODAL -->

