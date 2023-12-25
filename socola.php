<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img_xoa_phong/hương vị/socola/2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socola</title>
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
                                <li><a href="">Vị dâu</a></li>
                                <li><a href="cam.php">Cam</a></li>
                                <li><a href="socola.php">Socola</a></li>
                                <li><a href="">Vani</a></li>
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
                                <li><a href="vinamilk.php">Vinamilk</a></li>
                                <li><a href="#">Nutifood</a></li>
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
                                <li><a href="#">Vị dâu</a></li>
                                <li><a href="cam.php">Cam</a></li>
                                <li><a href="socola.php" style="color: brown;">Socola</a></li>
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
                            <a href="http://"><i class="fa-solid fa-list fa-2x" style="color: #000000;"></i><span>Vị Socola</span></a>
                        </div>
                        <!-- // -->
                        <div class="list_items">
                            <div class="product_item">
                                <a href="thong_tinsp7.php"><img src="img_xoa_phong/hương vị/socola/1.png"></a>
                                <h3> 2 lốc sữa tươi tiệt trùng Vinamilk 100% socola 180ml </h3>
                                <p>Giá: 60.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/2.png">
                                <h3>Lốc 3 hộp sữa tươi Meadow Fresh socola 200ml </h3>
                                <p>Giá: 55.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/3.png">
                                <h3>4 hộp sữa dinh dưỡng socola Vinamilk ADM Gold 180ml</h3>
                                <p>Giá: 41.100đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/5.png">
                                <h3> Lốc 4 hộp sữa tươi socola Vinamilk 100% Sữa Tươi 110ml</h3>
                                <p>Giá:28.100đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/hương vị/socola/6.png"></a>
                                <h3> Lốc 4 hộp sữa tươi socola Vinamilk 100% Sữa Tươi 180ml</h3>
                                <p>Giá: 33.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/hương vị/socola/7.png"></a>
                                <h3> Lốc 4 hộp sữa tươi tiệt trùng socola TH true MILK 110ml</h3>
                                <p>Giá: 24.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/8.png">
                                <h3> Lốc 4 hộp sữa tươi tiệt trùng socola TH true MILK 180ml</h3>
                                <p>Giá: 36.5000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/9.png">
                                <h3>Bịch sữa tiệt trùng Vinamilk socola 210ml </h3>
                                <p>Giá: 8.300đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/hương vị/socola/10.png"></a>
                                <h3> Bịch sữa tiệt trùng Dutch Lady socola 210ml  </h3>
                                <p>Giá: 7.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/hương vị/socola/11.png"></a>
                                <h3>Thùng 24 hộp sữa tươi socola Meadow Fresh 200ml 
                                    </h3>
                                    <p>Giá: 390.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                        
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/12.png">
                                <h3> Lốc 4 hộp sữa tiệt trùng socola Dutch Lady 180ml</h3>
                                <p>Giá: 34.500 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/13.png">
                                <h3>Thùng 48 hộp sữa tươi socola Vinamilk 100% Sữa Tươi 110ml </h3>
                                <p>Giá:232.500 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/hương vị/socola/14.png"></a>
                                <h3>Thùng 48 hộp sữa tươi socola Vinamilk 100% Sữa Tươi 180ml
                                    </h3>
                                <p>Giá: 349.500đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/hương vị/socola/15.png"></a>
                                <h3> Thùng 48 hộp sữa tươi tiệt trùng socola TH true MILK 180ml </h3>
                                <p>Giá: 7.500đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/16.png">
                                <h3> Sữa tiệt trùng Dutch Lady socola 210ml 
                                    
                                </h3>     
                                <p>Giá: 417.200đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/hương vị/socola/17.png">
                                <h3>  Thùng 48 hộp sữa tươi tiệt trùng socola TH true MILK 110ml
                                    
                                </h3>     
                                <p>Giá: 280.000đ VND</p>
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