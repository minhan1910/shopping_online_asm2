
    <h1 style="color: black;">Shopping Cart</h1>
    <div class="container mb-4" style="padding-top: 7%;">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Product</th>
                                <th scope="col">Available</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-right">Price</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Product Name Dada</td>
                                <td>In stock</td>
                                <td>
                                  <form action="index.php?action=processQunatityAndPrice" method="post" class="text-center">
                                    <!-- Ở đây dùng onchange submit khi select vào
                                        nên nó cứ post lên sau mỗi lần select
                                        cứ như vậy render ra liên tục có cái vòng for each bao bên ngoài
                                    -->
                                    <input type='hidden' name='code' value="" />
                                    <input type='hidden' name='action' value="change" />
                                    <select name='quantity' class='quantity' onchange="this.form.submit()">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                    </select>
                                  </form>
                                </td>
                                <td class="text-right">124,90 €</td>
                                <td class="text-right">
                                  <button class="btn btn-sm btn-danger" style="width: 3.1rem; height: 3rem;">
                                    <i class="fa fa-trash"></i>
                                  </button>
                               </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Shipping</td>
                                <td class="text-right">Free</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="text-right"><strong>346,90 €</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-10">
                        <button class="btn btn-block btn-light">
                          <a href="index.php">Continue Shopping</a>
                        </button>
                    </div>
                    <div class="col-sm-12 col-md-2 text-right pl-5">
                        <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 
  include 'view/footer.php';
?>