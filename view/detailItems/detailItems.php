<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/detailItems.css">
</head>
<body>
    <?php 
        $imagePath = 'upload/' . $loadOneCart['img'];
        
    ?>
    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <!-- Dùng overhidden ở đây để che 3 tấm hình bên phải -->
                    <div class="img-showcase">
                        <img src="<?= $imagePath ?>" alt="">
                        <!-- <img src="images/shoe_2.jpg" alt="">
                        <img src="images/shoe_3.jpg" alt="">
                        <img src="images/shoe_4.jpg" alt=""> -->
                    </div>
                </div>

                <!-- Slider if you have more than two pictures -->
                <div class="img-select">
                    <!-- <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="images/shoe_1.jpg" alt="show imgage">
                        </a>
                    </div> -->
                    <!-- <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="images/shoe_2.jpg" alt="show imgage">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img src="images/shoe_3.jpg" alt="show imgage">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img src="images/shoe_4.jpg" alt="show imgage">
                        </a>
                    </div> -->
                </div>
            </div>

            <!-- Card-right -->
            <div class="product-content">
                <h2 class="product-title">Online Shopping</h2>
                <a href="index.php" class="product-link">Visit Online store</a>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>4.7(21)</span>
                </div>

                <div class="product-price">
                    <!-- <p class="last-price">Old Price: <span>$257.00</span></p> -->
                    <p class="new-price">New Price: <span>$<?= $loadOneCart['price'] ?> (5%)</span></p>
                </div>

                <div class="product-detail">
                    <h2>about this item: </h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, minus quam itaque saepe, veritatis non facere nulla eligendi quibusdam eum fugit pariatur perspiciatis commodi possimus.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolore, eum illum dolorem laudantium illo?</p>
                    <ul>
                        <li>Color: <span>All</span></li>
                        <li>Available: <span>in stock</span></li>
                        <li>Category: <span><?= $loadCategoryProducts['name'] ?></span></li>
                        <li>Shipping area: <span>All over the world</span></li>
                        <li>Shipping Fee: <span>Free</span></li>
                    </ul>
                </div>

                <div class="purchase-info">
                    <form action="index.php?action=processAddToCart" method="post">
                        <!-- <input type="number" min="0" value="1"> -->
                        <input type="hidden" name="idAddCart" value="<?= $_GET['id'] ?>">
                        <input type="hidden" name="submitAddCart" value="addCart">
                        <button type="submit" class="btn">
                                Add to Cart <i class="fas fa-shopping-cart" style="background-color: transparent;"></i>
                        </button>
                        <button type="button" class="btn">Compare</button>
                    </form>
                </div>

                <div class="social-links">
                    <p>Share At: </p>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="form-group" style="padding-bottom: 300px;">
            <h1>Comment</h1>
            <table class="flat-table flat-table-1">
                <thead>
                  <th>Customer</th>
                  <th>Content</th>
                  <th>Date/Time</th>
                </thead>
                <tbody>
                  <tr>
                    <td>Johnasdasd</td>
                    <td>Smith</td>
                    <td>Seattle</td>
                  </tr>
                  <tr>
                    <td>Eddy</td>
                    <td>Johnston</td>
                    <td>Palo Alto</td>
                  </tr>
                </tbody>
            </table>
            <div class="form-group" style="width: 100%;">
                <form action="#" method="post">
                    <textarea name="comment" id="" cols="30" rows="10" style="width: 50%;"></textarea> <br>
                    <input name="sendComment" type="submit" value="Send" style="width: 10%; background-color: #256eff; color: #fff;">
                </form>
            </div>
        </div>
    </div>

    <script src="./js/controllers/detailItem.js"></script>
</body>
</php>