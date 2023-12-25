<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img_xoa_phong/sữa bột/9.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sữa bột</title>
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
                                    <li><a href="Sua_bot.php" target="_self" style="color: red;">Sữa bột</a></li>
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
                                <a href="http://"><i class="fa-solid fa-list fa-2x" style="color: #000000;"></i><span>Sữa bột</span></a>
                            </div>
                            <!-- // -->
                            <div class="list_items">
                                <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/sữa bột/3.png"></a>
                                    <h3> Sữa bột Blackmores Toddler Milk Drink số 3(900g)</h3>
                                    <p>Giá: 542.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <a href="thong_tinsp2.php"><img src="img_xoa_phong/sữa bột/5.png"></a>
                                    <h3> Sữa bột Vinamilk Sure Prevent Gold (400g)</h3>
                                    <p>Giá: 252.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/6.png">
                                    <h3>Sữa bột Wincofood Bonecare CalciMax+ </h3>
                                    <p>Giá: 265.000 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/4.png">
                                    <h3>Sữa bột Nutifood GrowPLUS+ đỏ(1.5kg) </h3>
                                    <p>Giá: 578.200 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/sữa bột/7.png"></a>
                                    <h3> Sữa bột Wincofood Canxi Bone & Joints(800g)</h3>
                                    <p>Giá: 190.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/sữa bột/12.png"></a>
                                    <h3> Sữa bột Colos Gain 1+(800g) </h3>
                                    <p style="padding-top: 27px;">Giá: 379.000 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/10.png">
                                    <h3>Sữa Nan Optipro Plus số 2 (800g)</h3>
                                    <p>Giá: 515.000 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/14.png">
                                    <h3>Sữa bột Abbott PediaSure BA(1.6kg) </h3>
                                    <p>Giá: 1.136.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/sữa bột/15.png"></a>
                                    <h3> Sữa bột Vinamilk YokoGold<br> số 3(850g)</h3>
                                    <p>Giá: 415.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <a href="thong_tinsp2.php"><img src="img_xoa_phong/sữa bột/16.png"></a>
                                    <h3>Sữa bột Vinamilk ColosGold<br> số 3 (800g)</h3>
                                    <p>Giá: 342.000 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/33.png">
                                    <h3>Sữa bột NAN INFINIPRO A2 Thụy Sĩ 3 (800g)</h3>
                                    <p>Giá: 605.000 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/18.png">
                                    <h3>Sữa bột Similac Total Protection số 3 (180ml)</h3>
                                    <p>Giá: 605.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/sữa bột/19.png"></a>
                                    <h3> Sữa bột Dielac Alpha Gold IQ số 4(850g) </h3>
                                    <p>Giá: 335.000đ VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <a href=""><img src="img_xoa_phong/sữa bột/13.png"></a>
                                    <h3>Sữa bột Nutifood GrowPLUS+ vàng(800g) </h3>
                                    <p>Giá: 485.000 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/2.png">
                                    <h3>Sữa bột Anlene Gold Movepro (400g) </h3>     
                                    <p>Giá: 210.000 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/20.png">
                                    <h3>Sữa bột Dielac Grow Plus 2+ (850g) </h3>
                                    <p>Giá: 329.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/21.png">
                                    <h3 style="margin-left: -20px;">Sữa Morinaga số 2 <br>(Chilmil-320g) </h3>
                                    <p>Giá: 426.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/22.png">
                                    <h3>Sữa Glico Icreo Balance Milk (Icreo Số 0) - Hộp (800g)</h3>
                                    <p>Giá: 456.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/23.png">
                                    <h3>Sữa Wakodo MOM dành cho phụ nữ mang thai (830g)</h3>
                                    <p>Giá: 4.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/24.png">
                                    <h3>Sữa Aptamil Gold Plus Úc số 1 Infant Formula (900g)</h3>
                                    <p>Giá: 34.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/25.png">
                                    <h3>Sữa bột dành cho bà bầu hương Vanilla(800g) </h3>
                                    <p>Giá: 443.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/26.png">
                                    <h3>Sữa Bledina 2 (900g) dành cho bé 6-12 tháng tuổi</h3>
                                    <p>Giá: 636.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/38.png">
                                    <h3>Sữa non COLOMI dành cho trẻ em (200g)</h3>
                                    <p>Giá: 487.700 VND</p>
                                    <button type="button" class="btn">Thêm vào giỏ </button>
                                </div>
                                <div class="product_item">
                                    <img src="img_xoa_phong/sữa bột/30.png">
                                    <h3>Sữa bột Enfagrow A+ NeuroPro3 (1.7kg)</h3>
                                    <p>Giá: 929.700 VND</p>
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