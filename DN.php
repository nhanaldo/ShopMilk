
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="icon" href="anh/milk.png">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="https://kit.fontawesome.com/10dfeb6bc7.js" crossorigin="anonymous"></script>
    <script src="icon.js"></script>
    <link rel="stylesheet" href="DN.css">
    <style>
        .form input[type="text"]{
            margin-left: -9px;
            width: 110%;
            background: white;
            border: none;
            padding: 16px 15px;
            border-radius: 20px;
            margin-top: 18px;
            box-shadow: #323638 0px 10px 10px -5px;
            border-inline: 2px solid transparent;
            }
    </style>
</head>
<body>
    <?php
        if(isset($_POST["btnLogin"]))
            {
            $name = $_POST["name"];
            $pass = $_POST["password"];

            require_once("connect.php");
            // pass lấy từ csdl lên làm hàm đã lấy từ passwordhash
            $sql = "select role, pass , count(*) as demo from user where userid = '$name'";
            
            $result = mysqli_query($conn, $sql);  
            // result la bang  co 1 han  g vaf $row co 1 cot la dem
            $row = mysqli_fetch_assoc($result);
            // so sánh pass  đầu vaò $pass với $row["pass"]
            if($row["demo"] > 0 && password_verify($pass , $row["pass"])){

                // echo "User co ton tai";
                // tao phien lam viec nguoi dung
                $_SESSION["username"] = $name;
                $_SESSION["role"] = $row['role'];
                header("location:trangchu.php");

            }else{

                // echo "User khong ton tai";
            }
        }
    ?>
    <div class="Logo_chinh">
        <img src="anh/LOGOO_chinh.png" alt="logo"><span>MILK</span>
        <p>Need help?</p>
    </div>
    <div class="body">
        <div class="Logo">
            <img src="anh/LOGOO_chinh.png" alt="logo">
            <p>Hãy uống sữa vì sữa rất tốt cho sức khỏe</p>
        </div>
        <div class="container">
            <div class="SignIn"> <img src="anh/LOGOO_chinh.png" alt="logo"><p>Sign In</p></div>
            <form action="" class="form" method="post">
                <input  type="text" name="name" id="name" placeholder="Name">
                <input  type="password" name="password" id="password" placeholder="Password">
                <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
                <input type="submit" value="Sign In" name="btnLogin">
            </form>
            <span class="agreement"><p>Do not have an account?</p><a href="DK.php" target="_self">SignUp</a></span>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="customer">
                <p>CUSTOMER SERVICE</p>
                <ul>
                    <li><a href="http://">Help Center</a></li>
                    <li><a href="http://">Payment Methods</a></li>
                    <li><a href="http://">Order Tracking</a></li>
                    <li><a href="http://">Free Shipping</a></li>
                    <li><a href="http://">Return & Refund</a></li>
                    <li><a href="http://">Shopee Guarantee</a></li>
                    <li><a href="http://">Contact Us</a></li>
                </ul>
            </div>
            <div class="aboutShop">
                <p>ABOUT SHOPPE</p>
                <ul>
                    <li><a href="http://">About Us</a></li>
                    <li><a href="http://">Shopee Blog</a></li>
                    <li><a href="http://">Shopee Careers</a></li>
                    <li><a href="http://">Privacy Policy</a></li>
                    <li><a href="http://">Seller Centre</a></li>
                    <li><a href="http://">Flash Deals</a></li>
                    <li><a href="http://">Media Contact</a></li>
                </ul>
            </div>
            <div class="payment">
                <p>PAYMENT</p>
                <div class="bank">
                    <img src="anh/logo-mb-bank.png" alt="Mbbank">
                    <img src="anh/logoArg.webp" alt="arg">
                    <img src="anh/vcb-logo.jpg" alt="VCB">
                </div>
                <div class="bank1">
                    <img src="anh/logo-vietinbank.png" alt="VTB">
                    <img src="anh/tech.jfif" alt="Tech">
                    <img src="anh/BIDV-Logo.png" alt="BIDV">
                </div>
            </div>
            <div class="follow">
                <p>FOLLOW ME</p>
                <div class="icon">
                    <ul>
                        <li><a href="http://"><i class="fa-brands fa-facebook fa-2x" style="color: #0f67ff;"></i><span>Facebook</span></a></li>
                        <li><a href="http://"><i class="fa-brands fa-instagram fa-2x" style="color: #fa4218;"></i><span>Intagram</span></a></li>
                        <li><a href="http://"><i class="fa-brands  fa-tiktok fa-2x" style="color: #000000;"></i><span>Tiktok</span></a></li>
                        <li><a href="http://"><i class="fa-brands fa-twitter fa-2x" style="color: #2807e2;"></i><span>Twitter</span></a></li>
                        <li><a href="http://"><i class="fa-brands fa-linkedin fa-2x" style="color: #327dff;"></i><span>Linkedin</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <div class="footer2">
            <p>2023 MILK All Rights Reserved .</p>
            <ul class="contry">
                <p>Country & Region:</p>
                <li><a href="http://">VietNam |</a></li>
                <li><a href="http://">Singapo |</a></li>
                <li><a href="http://">ThaiLand |</a></li>
                <li><a href="http://">TaiWan |</a></li>
                <li><a href="http://">Indonesia |</a></li>
                <li><a href="http://">Campuchia </a></li>
            </ul>
        </div>
    </footer>
</body>
</html>