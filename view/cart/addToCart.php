
    <h1 style="color: black;">Shopping Cart</h1>
    <div class="container mb-4" style="padding-top: 7%;">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <?php 
                        if(isset($_SESSION['shopping_cart'])) {
                            $total_price = 0;
                    ?>
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
                                <?php 
                                    
                                    foreach($_SESSION['shopping_cart'] as $product) {
                                        extract($product);
                                        $imagePath = 'upload/'.$img;
                                        // [15] => Array
                                        // (
                                        //     [id] => 15
                                        //     [name] => CyberBeats
                                        //     [price] => 99.99
                                        //     [img] => product1.png
                                        //     [description] => Best beats 2021
                                        //     [quantity] => 1
                                        // )
                                ?>
                                        <td><img src="<?= $imagePath ?>" width="100" height="100" /></td>
                                        <td><?= $name ?></td>
                                        <td>In stock</td>
                                        <td>
                                    <form action="index.php?action=addToCart" method="post" class="text-center">
                                        <!-- Ở đây dùng onchange submit khi select vào
                                            nên nó cứ post lên sau mỗi lần select
                                            cứ như vậy render ra liên tục có cái vòng for each bao bên ngoài
                                        -->
                                        <input type='hidden' name='code' value="<?= $id ?>" />
                                        <input type='hidden' name='changeQuantity' value="change" />
                                        <!-- <input type='hidden' name='action' value="change" /> -->
                                        <select name='quantity' class='quantity' onchange="this.form.submit()">
                                            <option <?php if($quantity==1) echo "selected";?> value="1">1</option>
                                            <option <?php if($quantity==2) echo "selected";?> value="2">2</option>
                                            <option <?php if($quantity==3) echo "selected";?> value="3">3</option>
                                            <option <?php if($quantity==4) echo "selected";?> value="4">4</option>
                                            <option <?php if($quantity==5) echo "selected";?> value="5">5</option>
                                        </select>
                                    
                                        </td>
                                        <td class="text-right"> $<?= $price ?></td>
                                        <td class="text-right">
                                        <button type="submit" name="deleteItem" class="btn btn-sm btn-danger" style="width: 3.1rem; height: 3rem;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                                <?php 
                                    $total_price += $price * $quantity;
                                    } 
                                ?>

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
                                <td class="text-right"><strong> $<?= $total_price?> </strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php 
                        } else {
                            echo "<h3 class='text-center'>Your cart is empty! Please Choose More Than 1 Item</h3>";
                        } 
                        // End if $_SESSION["shopping_cart"] is empty 
                    ?>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-10">
                        <button class="btn btn-block btn-light">
                          <a href="index.php">Continue Shopping</a>
                        </button>
                    </div>
                    <?php 
                        $hasItemCart = false;
                        if(isset($_SESSION["shopping_cart"])) {
                            $hasItemCart = true;
                        }
                    ?>
                    <div class="col-sm-12 col-md-2 text-right pl-5">
                        <form action="index.php?action=addToCart" method="post">
                            <input type="hidden" name="submitCheckout">
                            <button 
                                type="submit"
                                class="btn btn-lg btn-block btn-success text-uppercase" 
                                <?php 
                                    if(!$hasItemCart) {
                                        echo "disabled";
                                    } else {
                                        $_SESSION['checkout'] = 'Pay successfully !!';
                                    }
                                ?> 
                            >   
                                Checkout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 
  include 'view/footer.php';
?>