<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- BS 4 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

    <!-- Source Sans 3 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,400;0,600;0,700;1,500&display=swap" rel="stylesheet">

    <!-- FONT AWESOME  -->
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <div class="container">
        <!-- Start header -->
        <nav class="navbar navbar-light mt-2" style="border-radius: 5px; background-color: #000000;">
            <span class="navbar-brand m-2 h1" style="color: white; font-size: 4vh;">Admin</span>
        </nav>
        <!-- End  Header-->

        <!-- Start Navbar -->
        <div class="navigation__bar">
            <nav class="navbar navbar-expand-lg my-3" id="navBar" >
                <div class="navbar-nav" id="nav">
                    <a class="nav-link" href="#">Trang chủ</a>
                    <a class="nav-link" href="#">Danh mục</a>
                    <a class="nav-link" href="#">Hàng hóa</a>
                    <a class="nav-link" href="#">Khách hàng</a>
                    <a class="nav-link" href="#">Bình luận</a>
                    <a class="nav-link" href="#">Thống kê</a>
                    <a class="nav-link" href="#">Danh sách sản phẩm</a>
                </div>
            </nav>
        </div>
        <!-- End Navbar -->

        <!-- Title  -->
        <nav class="navbar navbar-expand-lg  my-4 py-3" id="navBar" style="border-radius: 5px; color: #fff; background-color: #000000;">
            <h3 style="font-size: 3vh; margin-left: 10px; height: 1vw;
            line-height: 1.5vw;">Khách hàng</h3>
        </nav>
        <!-- End title -->

        <!-- Add and search -->
        <div class="process">
            <div class="row">
                <div class="col-md-8">
                  <!-- BEGIN BUTTOM THÊM MỚI -->
                  <button
                    id="btnThemNguoiDung"
                    class="btn"
                    data-toggle="modal"
                    data-target="#myModal"
                    style="color: #fff; background-color: #a1851a"
                  >
                    <i class="fa fa-plus mr-1"></i>
                    Thêm Mới
                  </button>
                  <!-- END BUTTON THÊM MỚI -->
                </div>
                <div class="col-md-4">
                  <!-- BEGIN TÌM KIẾM -->
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nhập từ khóa"
                      id="txtSearch"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text text-light" id="basic-addon2"
                      style="color: #fff; background-color: #a1851a"
                        ><i class="fa fa-search"></i
                      ></span>
                    </div>
                  </div>
                  <!-- END TÌM KIẾM -->
                </div>
                <div class="clear-fix"></div>
                <div class="tblNguoiDung container" id="tblNguoiDung">
                    <!-- BEGIN TABLE NGƯỜI DÙNG -->
                    <table class="table table-bordered text-center" 
                    style="
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
                        <tr>
                            <td>1</td>
                            <td>minhan</td>
                            <td>123456</td>
                            <td>Phạm Dương Minh An</td>
                            <td>annogo123@gmail.com</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button class="btn text-light mr-2" data-toggle="modal"
                                    data-target="#myModal"
                                    style="background-color: #000000;"
                                    >Edit</button>
                                    <button class="btn px-0" style="background-color: #4e0000; color: #fff;">Remove</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>kyhung</td>
                            <td>123456</td>
                            <td>Kỳ Hùng</td>
                            <td>kyhung123@gmail.com</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-dark text-light mr-2" data-toggle="modal"
                                    data-target="#myModal" 
                                    style="background-color: #000000;"
                                    >Edit</button>
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


        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">
                  &times;
                </button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                  <form action="#" method="POST">
                      <div class="form-group">
                        <label>Tài khoản</label>
                        <input
                          id="TaiKhoan"
                          class="form-control"
                          placeholder="Nhập vào tài khoản"
                        />
                        <p id="txtTaiKhoan" class="text-danger"></p>
                      </div>
                      <div class="form-group">
                        <label>Họ tên</label>
                        <input
                          id="HoTen"
                          class="form-control"
                          placeholder="Nhập vào họ tên"
                        />
                        <p id="txtHoTen" class="text-danger"></p>
                      </div>
                      <div class="form-group">
                        <label>Mật khẩu</label>
                        <input
                          id="MatKhau"
                          class="form-control"
                          placeholder="Nhập vào mật khẩu"
                          type="password"
                        />
                        <p id="txtPassword" class="text-danger"></p>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input
                          id="Email"
                          class="form-control"
                          placeholder="Nhập vào Email"
                        />
                        <p id="txtEmail" class="text-danger"></p>
                      </div>  
                      
                      <div class="form-group">
                        <label>Hình Ảnh</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                          <p id="txtHinhAnh" class="text-danger"></p>
                      </div>             

                      <div class="form-group">
                        <label for="">Loại Người Dùng: </label>
                        <select class="form-control" id="loaiNguoiDung">
                          <option value="0">Chọn loại người dùng</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                        <p id="txtLoaiNguoiDung" class="text-danger"></p>
                      </div>
                      <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="" id="MoTa" class="form-control" placeholder="Nhập vào mô tả"></textarea>
                        <p id="txtMoTa" class="text-danger"></p>
                      </div>
                      
                  </form>
              </div>
            </div>
          </div>
            <!-- END MODAL -->
        </div>
    </div>
    <footer></footer>


    <style>
        #container {
          min-width: 310px;
          max-width: 800px;
          height: 400px;
          margin: 0 auto;
        }
    </style>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
