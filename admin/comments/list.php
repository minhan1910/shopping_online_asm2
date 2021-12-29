<!-- Title  -->
<nav class="navbar navbar-expand-lg  my-4 py-3" id="navBar"
    style="border-radius: 5px; color: #fff; background-color: #000000;">
    <h3 style="font-size: 3vh; margin-left: 10px; height: 1vw;
    line-height: 1.5vw;">List Comments</h3>
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
                    <th>ID COMMENT</th>
                    <th>CONTENT</th>
                    <th>ID USER</th>
                    <th>ID PRODUCT</th>
                    <th>DATE/TIME COMMENT</th>
                    <th></th>
                </thead>
                <tbody id="tblDanhSachNguoiDung">
                    <tr>
                        <td>11</td>
                        <td>kiểm tra nội dung bình luận</td>
                        <td>1</td>
                        <td>16</td>
                        <td>02:40:37am 04/12/2021</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <!-- <button class="btn text-light mr-2" data-toggle="modal" data-target="#myModalUpdate"
                                    style="background-color: #000000;">Edit</button> -->
                                <button class="btn px-0" style="background-color: #4e0000; color: #fff;">Remove</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>kiểm tra nội dung bình luận lần 2</td>
                        <td>2</td>
                        <td>16</td>
                        <td>02:40:37am 04/12/2021</td>
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