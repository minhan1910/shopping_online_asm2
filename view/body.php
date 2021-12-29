<section class="phoneCarousel">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 d-flex align-items-center">
            <div>
              <h1>Online Shop</h1>
              <h3>Best Smartphone of 2021!</h3>
              <p>
                Cras tortor mi, lobortis quis ornare in, varius scelerisque
                urna. Vivamus imperdiet dolor nec odio convallis consequat.
              </p>
              <div>
                <button class="btnPhone-white mr-2">
                  <i class="fa fa-info-circle"></i> More Info
                </button>
                <button class="btnPhone-blue">
                  <i class="fa fa-shopping-cart"></i> Shop
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 d-md-block d-none">
            <img class="img-fluid" src="./img/product-header2.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="products container section">
      <h2 class="section-title">-Featured Products-</h2>
      <div class="products__content">
        <!-- Chỗ này render sản phẩm -->
        <div id="" class="row">
          <?php 
            //Query all products
            $loadAllProducts = load_all_products();
            // echo '<pre>';
            // print_r($loadAllProducts);
            // echo '</pre>';
            foreach ($loadAllProducts as $product) {
              extract($product);
              $imagePath = 'upload/'.$img;
              // $image = (is_file($imagePath)) ? "<img src='$imagePath' height='80'>" : "no photo";
              echo '
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="card cardPhone">
                        <a href="index.php?action=detail-item&id=' . $id . '">
                          <img src="' . $imagePath . '" class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="cardPhone__title">' . $name . '</h3>
                                <p class="cardPhone__text">'  . $description . '</p>
                            </div>
                            <div>
                                <h3 class="cardPhone__title">$' . $price . '</h3>
                            </div>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="cardPhone__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div>
                              <form action="index.php?action=processAddToCart" method="POST">
                                <input type="hidden" name="idAddCart" value="' . $id . '">
                                <input type="hidden" name="submitAddCart" value="addCart">
                                <button class="btnPhone-shadow" type="submit"">
                                    <i class="fa fa-shopping-cart"></i> 
                                    Add to Cart
                                </button>
                              </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
              ';
            }

            //<a href="#" style="text-decoration: none; ">
            //</a>
          ?>
        </div>
      </div>
    </section>