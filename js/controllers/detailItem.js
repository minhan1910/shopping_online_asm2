// ra cái NodeList
const imgs = document.querySelectorAll('.img-select a');
console.log(imgs);
//Xong spread nó qua cái mảng
const imgBtns = [...imgs];
console.log(imgBtns);

//Đặt 1 ở đây có nghĩa là lúc nó trừ đi để nhân với số px của tấm hình
//nó sẽ đứng yên ở vị trí đầu tiên khi ko click gì hết
//vd như 2 thì sẽ như sau: 
//khi click vào 2 thì dataset.id = 2 sẽ được trả về
//sau đó sẽ dùng cái công thức cho transform 
//là lấy 2-1 = 1 * clientWidth = 538px ( ở dây tấm hình là 538px)
//nó sẽ tranlate: transform qua 538px là qua được tấm hình 2
let imgId = 1, data_id = 1;
//Cái dataset.id nó ảnh hưởng tới cái công thức nên set lại cho nó 
//để lúc render ra thì nó sẽ tự set lại cái id 
imgBtns.forEach((imgItem) => {
    imgItem.dataset.id = data_id++;
});

imgBtns.forEach((imgItem) => {
    if(imgBtns.length > 1) {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            // Return id of data-set in html
            //if click in picture 4 => dataset.id === data-id = 4
            imgId = imgItem.dataset.id;
            // document.querySelector(`.img-select #${imgId} a`).style.border = `3px solid black`;
            // console.log(imgId);
            slideImage();
        });
    } else {
        document.querySelector('.img-select').style.display = 'none';
    }
});

function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;
    //Lấy cái chiều dài của element mà nó query tới
    //Ví dụ như cái hình ở trên nó sẽ lấy 538px trả về giá trị px
    // console.log(displayWidth);
    // ở đây có dấu -
    document.querySelector('.img-showcase'). 
    style.transform = `translate(${- (imgId - 1) * displayWidth}px)`;
}

//khi thua màn hình nhỏ lại thì nó bị mất size
//nên phải cho nó ở đây để tự resize lại
window.addEventListener('resize', slideImage);