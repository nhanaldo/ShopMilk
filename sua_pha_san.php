<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img_xoa_phong/Sữa pha sẵn/1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sữa pha sẵn</title>
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
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/Sữa pha sẵn/banner-sb2og-3-mid-2.jpg')"></div>
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/Sữa pha sẵn/banner-sb2og-1-head-2.webp')"></div>
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/Sữa pha sẵn/banner-sb2og-5-mid-2.webp');background-size: cover; height: 240px; width: 110%;"></div>
                        
                    </div>
                </div>
                <div class="content2">
                    <div class="left">
                        <h2>Danh mục các sản phẩm</h2>
                        <div class="TTMilk">
                            <p>Tìm theo thông tin sữa</p>
                            <ul>
                                <li><a href="Sua_bot.php" target="_self" >Sữa bột</a></li>
                                <li><a href="sua_chua.php" target="_self">Sữa chua</a></li>
                                <li><a href="sua_hat.php" target="_self">Sữa hạt, sữa đặc</a></li>
                                <li><a href="sua_pha_san.php" target="_self" style="color: blue;">Sữa pha sẵn</a></li>
                                <li><a href="sua_tuoi.php" target="_self">Sữa tươi</a></li>
                            </ul>
                        </div>
                        <div class="HMilk">
                            <p>Tìm theo hãng sữa</p>
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
                        <div class="HVMilk">
                            <p>Tìm theo hương vị</p>
                            <ul>
                                <li><a href="dau.php">Vị dâu</a></li>
                                <li><a href="cam.php">Cam</a></li>
                                <li><a href="socola.php">Socola</a></li>
                                <li><a href="vani.php">Vani</a></li>
                            </ul>
                        </div>
                        <div class="price">
                            <p>Tìm theo giá</p>
                            <ul class="price1" style="float: right;">
                                    <li>
                                    <input type="checkbox" id="200.000d" name="gia">
                                    <label for="200.000d">400.000đ</label>
                                    </li>
                                    <li>
                                    <input type="checkbox" id="500.000d" name="gia">
                                    <label for="200.000d">550.000đ</label>
                                    </li>
                                    <li>
                                    <input type="checkbox" id="700.000d" name="gia">
                                    <label for="200.000d">600.000đ</label>
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
                            <a href="http://"><i class="fa-solid fa-list fa-2x" style="color: #000000;"></i><span>Sữa pha sẵn </span></a>
                        </div>
                        <!--2 4 6 8-->
                        <div class="list_items">
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/1.png">
                                <h3> Thùng 48 hộp sữa pha sẵn Nutifood GrowPLUS+(110ml)  </h3>
                                <p>Giá: 564.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href="thong_tinsp4.php"><img src="img_xoa_phong/Sữa pha sẵn/2.png"></a>
                                <h3>Thùng 48 hộp sữa pha sẵn Nutifood GrowPLUS+(180ml) </h3>
                                <p>Giá: 393.840 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/3.png">
                                <h3>Thùng 48 hộp sữa pha sẵn Abbott Grow Gold </h3>
                                <p>Giá: 561.600 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/4.png">
                                <h3>Thùng 48 hộp sữa pha sẵn Abbott Grow Gold</h3>
                                <p>Giá: 796.800 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Sữa pha sẵn/6.png"></a>
                                <h3> Lốc 4 hộp sữa pha sẵn Vinamilk YokoGold 180 ml
                                    </h3>
                                <p>Giá: 717.600đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Sữa pha sẵn/7.png"></a>
                                <h3> Lốc 4 hộp sữa pha sẵn Vinamilk ColosGold </h3>
                                <p>Giá: 398.400 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/8.png">
                                <h3>Lốc 4 hộp sữa pha sẵn Vinamilk Pedia Kenji</h3>
                                <p>Giá: 1.176.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/9.png">
                                <h3>Lốc 4 hộp sữa pha sẵn PediaSure</h3>
                                <p>Giá: 1.080.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Sữa pha sẵn/10.png"></a>
                                <h3> Lốc 4 hộp sữa pha sẵn PediaSure
                                    </h3>
                                <p>Giá: 1.560.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Sữa pha sẵn/11.png"></a>
                                <h3> Lốc 4 hộp sữa pha sẵn Nestlé Nan Grow </h3>
                                <p>Giá: 540.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/12.png">
                                <h3>Lốc 4 hộp sữa pha sẵn Nestlé Nan Grow </h3>
                                <p>Giá: 777.840 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/13.png">
                                <h3>Lốc 4 hộp sữa pha sẵn Friso Gold</h3>
                                <p>Giá: 444.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Sữa pha sẵn/14.png"></a>
                                <h3> Lốc 4 hộp sữa pha sẵn Friso Gold
                                    </h3>
                                <p>Giá: 753.60đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Sữa pha sẵn/15.png"></a>
                                <h3> Lốc 4 hộp sữa non pha sẵn Dielac Grow Plus </h3>
                                <p>Giá: 350.400 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/16.png">
                                <h3>Lốc 4 hộp sữa non pha sẵn Dielac Grow Plus </h3>     
                                <p>Giá: 525.600 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/17.png">
                                <h3>Lốc 4 hộp sữa pha sẵn Dielac Alpha Gold </h3>
                                <p>Giá: 484.400 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/18.png">
                                <h3>Lốc 3 hộp sữa pha sẵn Enfagrow A+ 360° Brain DHA+</h3>
                                <p>Giá: 686.400 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/19.png">
                                <h3>Lốc 4 hộp sữa pha sẵn Optimum Gold</h3>
                                <p>Giá: 381.600 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Sữa pha sẵn/20.png">
                                <h3>Lốc 4 hộp sữa pha sẵn Optimum Gold</h3>
                                <p>Giá: 597.600 VND</p>
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
    <<?php 
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