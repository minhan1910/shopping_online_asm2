var service = new ProductService();

function getEle(id) {
  return document.getElementById(id);
}

function getListProduct() {
  service
    .getListProductApi()
    .then(function (result) {
      console.log(result.data);
      renderData(result.data);
    })
    .catch(function (error) {
      console.log(error);
    });
}

getListProduct();

function renderData(data) {
  var html = "";
  data.forEach(function (item) {
    html += `
          <div class="col-12 col-md-6 col-lg-4">
              <div class="card cardPhone">
                  <a href="detailItems.html">
                    <img src="./img/${item.hinhAnh}" class="card-img-top" alt="..." />
                  </a>
                  <div class="card-body">
                      <div class="d-flex justify-content-between">
                      <div>
                          <h3 class="cardPhone__title">${item.tenSP}</h3>
                          <p class="cardPhone__text">${item.moTa}</p>
                      </div>
                      <div>
                          <h3 class="cardPhone__title">$${item.gia}</h3>
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
                          <button class="btnPhone-shadow">
                          <i class="fa fa-shopping-cart"></i> 
                            <a href="addToCart.html" style="text-decoration: none; ">
                              Add to Cart
                            </a>
                          </button>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
        `;
  });
  getEle("product_content").innerHTML = html;
}
