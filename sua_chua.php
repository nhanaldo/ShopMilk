<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="anh/logoSuaChua.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sữa chua</title>
    <script src="https://kit.fontawesome.com/10dfeb6bc7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="giao_dien_webMilk.css">
</head>
<body>
<?php 
    include ("hearder.php");  
?>
    <form action="" method="post">
        <main class="main">
            <div class="menu">
                <ul>
                    <li style="padding-left: 14px;"><a href="trangchu.php">TRANG CHỦ</a></li>
                    <li><a href="#">THÔNG TIN SỮA</a>
                        <div class="menu2">
                            <ul>
                                <li><a href="Sua_bot.php" target="_blank">Sữa bột</a></li>
                                <li><a href="sua_chua.php" target="_self">Sữa chua</a></li>
                                <li><a href="sua_hat.php" target="_self">Sữa hạt, sữa đặc</a></li>
                                <li><a href="sua_pha_san.php" target="_self">Sữa pha sẵn</a></li>
                                <li><a href="sua_tuoi.php" target="_self">Sữa tươi</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">CÁC HÃNG SỮA</a>
                        <div class="menu3">
                            <ul>
                                <li><a href="vinamilk.php">Vinamilk</a></li>
                                <li><a href="Nutifood.php">Nutifood</a></li>
                                <li><a href="milo.php">Milo</a></li>
                                <li><a href="#">TH True Milk</a></li>
                                <li><a href="#">Daisy</a></li>
                                <li><a href="#">Cô gái Ha Lan</a></li>
                                <li><a href="#">Abbot</a></li>
                            </ul>
                        </div>
                    </li>
                    <li style="padding-left: 17px;"><a href="#">HƯƠNG VỊ</a>
                        <div class="menu4">
                            <ul>
                                <li><a href="dau.php">Vị dâu</a></li>
                                <li><a href="cam.php">Cam</a></li>
                                <li><a href="socola.php">Socola</a></li>
                                <li><a href="vani.php">Vani</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="center">
                    <div class="slideshow">
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/sữa chua/collection_banner.webp');height: 250px; width: 100%;background-size: contain;"></div>
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/sữa chua/Banned1.jpg')"></div>
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/sữa chua/banner-landingpage-7308-02112023125914.webp')"></div>
                    </div>
                </div>
                <div class="content2">
                    <div class="left">
                        <h2>Danh mục các sản phẩm</h2>
                        <div class="TTMilk">
                            <p>Tìm theo thông tin sữa</p>
                            <ul>
                                <li><a href="Sua_bot.php" target="_self" >Sữa bột</a></li>
                                <li><a href="sua_chua.php" target="_self" style="color: rgb(255, 255, 255);">Sữa chua</a></li>
                                <li><a href="sua_hat.php" target="_self">Sữa hạt, sữa đặc</a></li>
                                <li><a href="sua_pha_san.php" target="_self">Sữa pha sẵn</a></li>
                                <li><a href="sua_tuoi.php" target="_self">Sữa tươi</a></li>
                            </ul>
                        </div>
                        <div class="HMilk">
                            <p>Tìm theo hãng sữa</p>
                            <ul>
                                <li><a href="vinamilk.php">Vinamilk</a></li>
                                <li><a href="">Nutifood</a></li>
                                <li><a href="">Milo</a></li>
                                <li><a href="#">TH True Milk</a></li>
                                <li><a href="#">Daisy</a></li>
                                <li><a href="#">Cô gái Ha Lan</a></li>
                                <li><a href="#">Abbot</a></li>
                            </ul>
                        </div>
                        <div class="HVMilk">
                            <p>Tìm theo hương vị</p>
                            <ul>
                                <li><a href="">Vị dâu</a></li>
                                <li><a href="cam.php">Cam</a></li>
                                <li><a href="socola.php">Socola</a></li>
                                <li><a href="">Vani</a></li>
                            </ul>
                        </div>
                        <div class="price">
                            <p>Tìm theo giá</p>
                            <ul class="price1" style="float: right;">
                                    <li>
                                    <input type="checkbox" id="200.000d" name="gia">
                                    <label for="200.000d">90.000đ</label>
                                    </li>
                                    <li>
                                    <input type="checkbox" id="500.000d" name="gia">
                                    <label for="200.000d">95.000đ</label>
                                    </li>
                                    <li>
                                    <input type="checkbox" id="700.000d" name="gia">
                                    <label for="200.000d">180.000đ</label>
                                    </li>
                            </ul>
                            <ul class="price2">                              
                                <li>
                                <input type="checkbox" id="1.000.000d" name="gia">
                                <label for="200.000d">210.000d</label>
                                </li>
                                <li>
                                <input type="checkbox" id="3.000.000d" name="gia">
                                <label for="200.000d">250.000d</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="3.000.000d" name="gia">
                                    <label for="200.000d">270.000đ</label>
                                </li>
                            </ul>
                        </div>
                        <div class="sale">
                            <img src="anh/sale.png" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <div class="directory">
                            <a href="http://"><i class="fa-solid fa-list fa-2x" style="color: #000000;"></i><span>Sữa Chua</span></a>
                        </div>
                        <div class="list_items">
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/sữa chua/1.png"></a>
                                <h3> Lốc 4 hộp sữa chua uống tiệt trùng Yomost(170ml)</h3>
                                <p>Giá: 32.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/2.png">
                                <h3>Lốc 4 hộp sữa chua uống tiệt trùng Yomost(170ml)</h3>
                                <p>Giá: 32.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/3.png">
                                <h3>Lốc 4 hộp sữa trái cây Vinamilk Hero(180ml) </h3>
                                <p>Giá: 32.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/4.png">
                                <h3>Lốc 6 chai sữa chua uống tiệt trùng Vinamilk SuSu IQ(80ml) </h3>
                                <p>Giá: 19.200 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/sữa chua/5.png"></a>
                                <h3> Sữa chua uống tiệt trùng Vinamilk SuSu(110ml)</h3>
                                <p>Giá: 5.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/sữa chua/6.png"></a>
                                <h3> Lốc 5 chai sữa chua uống men sống Vinamilk Probi(65ml) </h3>
                                <p>Giá: 32.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/7.png">
                                <h3>Lốc 4 hộp sữa chua có đường Vinamilk(100g)</h3>
                                <p>Giá: 25.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/8.png">
                                <h3>Lốc 5 chai sữa chua uống lên men Yakult  (65ml)</h3>
                                <p>Giá: 26.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/sữa chua/9.png"></a>
                                <h3>Lốc 4 hộp sữa chua uống tổ yến Nestlé (115ml)</h3>
                                <p>Giá: 25.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href="thong_tinsp2.php"><img src="img_xoa_phong/sữa chua/10.png"></a>
                                <h3>Sữa chua uống tổ yến Nestlé Yogu(85ml)</h3>
                                <p>Giá: 6.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/11.png">
                                <h3>Lốc 4 hộp sữa chua trái cây TH true YOGURT (100g)</h3>
                                <p>Giá: 27.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href="thong_tinsp3.php"><img src="img_xoa_phong/sữa chua/12.png"></a>
                                <h3>Lốc 4 hộp sữa chua uống tiệt trùng TH true YOGURT(180ml)</h3>
                                <p>Giá: 38.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/sữa chua/13.png"></a>
                                <h3> Lốc 4 hộp sữa chua uống TH true YOGURT Top Kid(110ml) </h3>
                                <p>Giá: 23.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/sữa chua/14.png"></a>
                                <h3>Lốc 4 hộp sữa chua trái cây TH true YOGURT(100g) </h3>
                                <p>Giá: 35.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/15.png">
                                <h3>SLốc 4 hộp sữa chua TH true YOGURT Top Kid(100g) </h3>     
                                <p>Giá: 31.500 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/16.png">
                                <h3>Lốc 5 chai sữa chua uống men sống Nutifood(65ml) </h3>
                                <p>Giá: 22.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/17.png">
                                <h3>Lốc 4 hộp sữa trái cây Nutifood NuVi(180ml)</h3>
                                <p>Giá: 31.200 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/18.png">
                                <h3>Sữa chua uống tiệt trùng Nutifood NuVi Power(110ml)</h3>
                                <p>Giá: 7.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/19.png">
                                <h3>Lốc 4 hộp sữa chua uống tiệt trùng LiF Kun (180ml)</h3>
                                <p>Giá: 24.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/20.png">
                                <h3>Túi sữa trái cây LiF Kun vị nho(110ml)</h3>
                                <p>Giá: 6.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/21.png">
                                <h3>Thùng 48 Hộp Sữa Chua Vinamilk Susu dâu(110ml)</h3>
                                <p>Giá: 36.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/22.png">
                                <h3>Thùng Sữa chua uống từ thực vật Veyo Yogurt Vị Dâu(180 ml)</h3>
                                <p>Giá: 156.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/23.png">
                                <h3>Thùng 48 hộp Sữa Chua Uống DL Hương VQ Và BH(180ml)</h3>
                                <p>Giá: 77.700 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/sữa chua/24.png">
                                <h3>Lốc 4 Chai Sữa Chua Uống Probi Ít Đường(130ml)</h3>
                                <p>Giá: 35.800 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                        </div> 
                        <div class="clear">
                          
                        </div>  
                        <div class="page">
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>
    <script>
        let list=document.querySelectorAll('.list_items .product_item');
        console.log(list)
        let thispage=1;
        let limit=12;
        function loadItem(){
            let begin=limit*(thispage-1);
            let end=limit*thispage-1;
            list.forEach((item,key)=>{
                if(key>=begin&&key<=end){
                    item.style.display='block'
                }else{
                    item.style.display='none'
                }
            })
            listpage()
        }
        function listpage(){
            let count=Math.ceil(list.length/limit);
            document.querySelector('.page').innerHTML='';
            if(thispage!=1){
                let prev=document.createElement('li');
                prev.innerHTML='<i class="fa-solid fa-chevron-left"></i>'
                prev.addEventListener('click',()=>{
                    pageclick(thispage-1);
                })
                document.querySelector('.page').appendChild(prev);
            }
            for(let i=1;i<=count;i++){
                let newpage=document.createElement('li');
                newpage.innerText=i;
                if(i==thispage){
                    newpage.classList.add('active')
                }
                newpage.addEventListener('click',()=>{
                    pageclick(i);
                })
                document.querySelector('.page').appendChild(newpage)
            }
            if(thispage!=count){
                let next=document.createElement('li');
                next.innerHTML='<i class="fa-solid fa-chevron-right"></i>'
                next.addEventListener('click',()=>{
                    pageclick(thispage+1);
                })
                document.querySelector('.page').appendChild(next);
            }
        }
        function pageclick(i){
            thispage=i;
            loadItem()
        }
        loadItem()
    </script>
<?php 
    include ("footer.php");
?>
</body>
</html>