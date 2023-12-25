<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img_xoa_phong/vina/3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinaMilk</title>
    <script src="https://kit.fontawesome.com/10dfeb6bc7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="giao_dien_webMilk.css">
</head>
<body>
<?php 
    include ("hearder.php");  
?>
    <form method="post">
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
                        <div class="slideshow-image" style="background-image: url('anh/PC_PediaKenji_Banner-Nganh-hang-1920x515.jpg')"></div>
                        <div class="slideshow-image" style="background-image: url('anh/Top-Banner-SB_2.png')"></div>
                        <div class="slideshow-image" style="background-image: url('anh/hero-banner-To-yen-1920x515.jpg')"></div>
                    </div>
                </div>
                <div class="content2">
                    <div class="left">
                        <h2>Danh mục các sản phẩm</h2>
                        <div class="TTMilk">
                            <p>Tìm theo thông tin sữa</p>
                            <ul>
                                <li><a href="Sua_bot.php" target="_self">Sữa bột</a></li>
                                <li><a href="sua_chua.php" target="_self">Sữa chua</a></li>
                                <li><a href="sua_hat.php" target="_self">Sữa hạt, sữa đặc</a></li>
                                <li><a href="sua_pha_san.php" target="_self">Sữa pha sẵn</a></li>
                                <li><a href="sua_tuoi.php" target="_self">Sữa tươi</a></li>
                            </ul>
                        </div>
                        <div class="HMilk">
                            <p>Tìm theo hãng sữa</p>
                            <ul>
                                <li><a href="vinamilk.php" style="color:white">Vinamilk</a></li>
                                <li><a href="#">Nutifood</a></li>
                                <li><a href="milo.php">Milo</a></li>
                                <li><a href="#">TH True Milk</a></li>
                                <li><a href="#">Daisy</a></li>
                                <li><a href="#">Cô gái Ha Lan</a></li>
                                <li><a href="#">Abbot</a></li>
                            </ul>
                        </div>
                        <div class="HVMilk">
                            <p>Tìm theo hương vị</p>
                            <ul>
                                <li><a href="#">Vị dâu</a></li>
                                <li><a href="cam.php">Cam</a></li>
                                <li><a href="socola.php">Socola</a></li>
                                <li><a href="#">Vani</a></li>
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
                            <a href="http://"><i class="fa-solid fa-list fa-2x" style="color: #000000;"></i><span>VinaMilk</span></a>
                        </div>
                        <!-- // -->
                        <div class="list_items">
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/1.png"></a>
                                <h3>Lốc 4 hộp sữa trái cây Vinamilk Hero
                                </h3>
                                <p>Giá: 26.400đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/vina/2.png">
                                <h3> Sữa bột Vinamilk Sure Prevent Gold</h3>
                                <p>Giá: 252.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/vina/3.png">
                                <h3>Lốc 6 chai sữa chua uống tiệt trùng Vinamilk SuSu IQ</h3>
                                <p>Giá: 20.100 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/vina/4.png">
                                <h3> Sữa chua uống tiệt trùng Vinamilk SuSu</h3>
                                <p>Giá: 4.500 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/5.png"></a>
                                <h3>Lốc 5 chai sữa chua uống men sống Vinamilk Probi
                                    </h3>
                                <p>Giá: 21.900đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/6.png"></a>
                                <h3>Lốc 4 hộp sữa chua có đường Vinamilk</h3>
                                <p>Giá: 28.500 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/7.png"></a>
                                <h3>  Lốc 4 hộp sữa pha sẵn Vinamilk YokoGold 110 ml</h3>
                                <p>Giá: 38.500 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/vina/8.png">
                                <h3> Lốc 4 hộp sữa pha sẵn Vinamilk YokoGold 180 ml</h3>
                                <p>Giá: 78.900đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/9.png"></a>
                                <h3>Lốc 4 hộp sữa pha sẵn Vinamilk ColosGold
                              </h3>
                                <p>Giá: 25.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/10.png"></a>
                                <h3>Lốc 4 hộp sữa pha sẵn Vinamilk Pedia Kenji
                                   </h3>
                                    <p>Giá: 68.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                            <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/vina/11.png"></a>
                                    <h3>Lốc 4 hộp sữa hạt Vinamilk Super Nut 180 ml
                                    </h3>
                                    <p>Giá: 43.600đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                             </div>
                             <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/12.png"></a>
                                <h3>Thùng 24 hộp sữa hạt Vinamilk Super Nut 180 ml
                                 </h3>
                                    <p>Giá: 480.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/13.png"></a>
                                    <h3>Lốc 5 chai sữa chua uống lên men Yakult 65 ml
                                    </h3>
                                    <p>Giá: 25.210đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/vina/16.png"></a>
                                     <h3>Kem đặc Vinamilk Ngôi Sao Phương Nam xanh lá hộp 380g
                                    </h3>
                                    <p>Giá: 20.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/vina/17.png"></a>
                                    <h3>Sữa đặc Vinamilk Ông Thọ đỏ tuýp 165g
                                    </h3>
                                    <p>Giá: 19.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/vina/18.png"></a>
                                    <h3>Kem đặc Vinamilk Tài Lộc lon 380g
                                    </h3>
                                    <p>Giá: 18.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                        
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/19.png"></a>
                                <h3>Lốc 4 hộp sữa tươi tiệt trùng Vinamilk ít đường 180 ml 
                               </h3>
                                <p>Giá: 29.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/20.png"></a>
                                <h3>Bịch sữa tươi tiệt trùng Vinamilk có đường 220 ml
                                </h3>
                                <p>Giá: 6.900đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/21.png"></a>
                                <h3>Thùng 24 hộp sữa tươi tiệt trùng Vinamilk có đường 110 ml
                                </h3>
                                <p>Giá: 183.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/vina/22.png"></a>
                                <h3>Thùng 48 bịch sữa tươi tiệt trùng Vinamilk có đường 220 ml
                                </h3>
                                <p>Giá: 262.300đđ VND</p>
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
    <?php 
        include ("footer.php");
    ?>
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
</body>
</html>