function ProductService() {
  this.getListProductApi = function () {
    //Lấy danh sách sản phẩm từ server
    /**
     * axios trả về đối tượng Promise
     *  - pending: chờ
     *  - resolve: thành công
     *  - reject: thất bại
     */
    return axios({
      // url: "https://5a6451dcf2bae00012ca1a6a.mockapi.io/api/products",
      url: "https://6187f09a057b9b00177f9b28.mockapi.io/api/products",
      method: "GET",
    });
  };
}
