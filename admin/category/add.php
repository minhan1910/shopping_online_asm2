<!-- Start Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">ADD CATEGORY</h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <!-- Modal body -->
            <form action="index.php?action=add-category" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Category Name: </label>
                        <input id="categoryName" class="form-control" placeholder="Enter Name Category" name="categoryName"/>
                        <p id="txtCategoryName" class="text-danger"></p>
                    </div>
                </div>
                <div class="modal-footer">  
                    <input class="btn btn-dark text-light px-2" type="reset" value="Reset" name="reset">
                    <!--  -->
                    <input class="btn btn-dark text-light" type="submit" value="Add" name="addCategory">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MODAL -->