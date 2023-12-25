<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sữa Hạt</title>
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
                                <li><a href="">Nutifood</a></li>
                                <li><a href="m">Milo</a></li>
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
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/bannedD.webp')"></div>
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/kham-pha-dong-s.jpg');height: 250px; width: 100%;background-size: contain;"></div>
                        <div class="slideshow-image" style="background-image: url('img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/kham-pha-dong-san-pham-sua-9-loai-hat-vinamilk-super-nut-co-gi-dac-biet-202212081422423059.jpg');height: 250px; width: 100%;background-size: contain;"></div>
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
                                <li><a href="sua_hat.php" target="_self" style="color: brown;">Sữa hạt, sữa đặc</a></li>
                                <li><a href="sua_pha_san.php" target="_self">Sữa pha sẵn</a></li>
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
                            <a href="http://"><i class="fa-solid fa-list fa-2x" style="color: #000000;"></i><span>Sữa Hạt, sữa đặc</span></a>
                        </div>
                        <!--2 5 10 14-->
                        <div class="list_items">
                            <div class="product_item">
                                <a href="thong_tinsp.php"><img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/1.png"></a>
                                <h3> Lốc 4 hộp sữa hạt Vinamilk Super Nut 180 ml </h3>
                                <p>Giá: 484.400đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/2.png">
                                <h3>Thùng 24 hộp sữa hạt Vinamilk Super Nut 180 ml </h3>
                                <p>Giá: 484.400 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/3.png">
                                <h3> Lốc 3 hộp sữa hạt hạnh nhân 137 Degrees 180 ml</h3>
                                <p>Giá: 1.224.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/4.png">
                                <h3> Lốc 3 hộp sữa hạt óc chó truyền thống 137 Degrees 180 ml</h3>
                                <p>Giá: 1.368.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/5.png"></a>
                                <h3> Kem đặc Vinamilk Ngôi Sao Phương Nam xanh lá hộp 380g</h3>
                                <p>Giá: 960.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/6.png"></a>
                                <h3> Sữa đặc Vinamilk Ông Thọ đỏ tuýp 165g </h3>
                                <p>Giá: 19.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/7.png">
                                <h3>Kem đặc Vinamilk Tài Lộc lon 380g </h3>
                                <p>Giá: 16.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/8.png">
                                <h3> Lốc 4 hộp thức uống lúa mạch Nestlé Milo 115 ml</h3>
                                <p>Giá: 225.600 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/9.png"></a>
                                <h3> Thùng 48 hộp thức uống lúa mạch Nestlé Milo 115 ml
                                    </h3>
                                <p>Giá: 416.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href="thong_tinsp2.php"><img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/10.png"></a>
                                <h3> Lốc 4 hộp thức uống lúa mạch Nestlé Milo Active Go 180 ml </h3>
                                <p>Giá: 352.800 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/11.png">
                                <h3>Thùng 48 hộp thức uống Nestlé Milo Active Go 180 ml </h3>
                                <p>Giá: 364.800 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/12.png">
                                <h3> Lốc 4 hộp thức uống lúa mạch hương socola LiF Kun 180 ml</h3>
                                <p>Giá: 324.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/13.png"></a>
                                <h3> Thùng 48 hộp thức uống lúa mạch LiF Kun 180 ml</h3>
                                <p>Giá: 324.000đ VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <a href=""><img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/14.png"></a>
                                <h3> Thức uống lúa mạch hương socola LiF Kun 110 ml </h3>
                                <p>Giá: 225.600 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/16.png">
                                <h3> Túi thức uống lúa mạch hương socola Nutifood NuVi 110 ml</h3>     
                                <p>Giá: 216.000 VND</p>
                                <button type="button" class="btn">Thêm vào giỏ </button>
                            </div>
                            <div class="product_item">
                                <img src="img_xoa_phong/Các Loại Sữa Hạt, Sữa Đặc, Sữa Lúa Mạch/17.png">
                                <h3>Thùng 24 túi thức uống lúa mạch NN Power110ml </h3>
                                <p>Giá: 211.200 VND</p>
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
        let limit=8;
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