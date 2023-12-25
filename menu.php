<?php

require_once("connect.php");
$sql = "SELECT * FROM milk";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <script src="https://kit.fontawesome.com/10dfeb6bc7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="giao_dien_webMilk.css">
</head>

<body>

    <main class="main">
        <div class="menu">
            <ul>

                <li><a href="#">CÁC HÃNG SỮA</a>
                    <div class="menu3">
                        <ul>
                            <li><a href="vinamilk.php">Vinamilk</a></li>
                            <li><a href="#">Nutifood</a></li>
                            <li><a href="#">Abbot</a></li>
                            <li><a href="#">Cô gái Hà Lan</a></li>
                            <li><a href="#">Daisy</a></li>
                            <li><a href="#">TH True Milk</a></li>
                            <li><a href="#">Milo</a></li>
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
                    <div class="slideshow-image" style="background-image: url('anh/CanhDOng.jpg')"></div>
                    <div class="slideshow-image" style="background-image: url('anh/Te hat.jpg')"></div>
                    <div class="slideshow-image" style="background-image: url('anh/Ha lan.jpg')"></div>
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
                            <li><a href="#">Abbot</a></li>
                            <li><a href="#">Cô gái Hà Lan</a></li>
                            <li><a href="#">Daisy</a></li>
                            <li><a href="#">TH True Milk</a></li>
                            <li><a href="#">Milo</a></li>
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
                        <a href="http://"><span>Tất cả các sản phẩm</span> <i class="fa fa-hand-o-down" style="color: #000; margin-left: 10px; font-size: 20;"></i></a>
                    </div>
                    <!-- // -->
                    <div class="list_items">

                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="product_item">
                                <a><img src="<?php echo $row['thumbnail']; ?>"></a>
                                <h3> <?php echo $row['name']; ?> <br> <?php echo $row['weight']; ?> ml</h3>
                                <p>Giá: <?php echo $row['price']; ?> VND</p>
                                <a href="imformation.php?milkid=<?php echo $row['milkid']; ?>">Xem Thông Tin</a>
                            </div>
                        <?php
                        }
                        // dong ket noi 
                        mysqli_close($conn);
                        ?>
                    </div>
                    <div class="clear">

                    </div>
                    <div class="page">

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        let list = document.querySelectorAll('.list_items .product_item');
        console.log(list)
        let thispage = 1;
        let limit = 12;

        function loadItem() {
            let begin = limit * (thispage - 1);
            let end = limit * thispage - 1;
            list.forEach((item, key) => {
                if (key >= begin && key <= end) {
                    item.style.display = 'block'
                } else {
                    item.style.display = 'none'
                }
            })
            listpage()
        }

        function listpage() {
            let count = Math.ceil(list.length / limit);
            document.querySelector('.page').innerHTML = '';
            if (thispage != 1) {
                let prev = document.createElement('li');
                prev.innerHTML = '<i class="fa-solid fa-chevron-left"></i>'
                prev.addEventListener('click', () => {
                    pageclick(thispage - 1);
                })
                document.querySelector('.page').appendChild(prev);
            }
            for (let i = 1; i <= count; i++) {
                let newpage = document.createElement('li');
                newpage.innerText = i;
                if (i == thispage) {
                    newpage.classList.add('active')
                }
                newpage.addEventListener('click', () => {
                    pageclick(i);
                })
                document.querySelector('.page').appendChild(newpage)
            }
            if (thispage != count) {
                let next = document.createElement('li');
                next.innerHTML = '<i class="fa-solid fa-chevron-right"></i>'
                next.addEventListener('click', () => {
                    pageclick(thispage + 1);
                })
                document.querySelector('.page').appendChild(next);
            }
        }

        function pageclick(i) {
            thispage = i;
            loadItem()
        }
        loadItem()
    </script>
</body>

</html>