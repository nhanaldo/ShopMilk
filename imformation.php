<?php
session_start();



?>

<?php

require_once("connect.php");


    $milkId = $_GET['milkid'];
    
    $sqlCheck = "SELECT * FROM milk WHERE milkid = '$milkId'";
    $resultCheck = mysqli_query($conn, $sqlCheck);
    $row = mysqli_fetch_assoc($resultCheck);


// Xử lý khi người dùng nhấn nút "Mua"
if (isset($_POST['buy'])) {
    
        $quantity = $_POST['quantity'];
        $id = $_SESSION['username'];
        $productId = $row['milkid'];
        $sql = "INSERT INTO card (userid, productId, count) VALUES ('$id', '$productId', '$quantity')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>alert("Đã thêm sản phẩm vào giỏ hàng.");</script>';
        } else {
           echo "Đã xảy ra lỗi khi thêm vào giỏ hàng: " . mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assect/css/main.css">
    <title>Document</title>
</head>

<body>

<a href="trangchu.php">Trang Chủ</a>

    <div class="wrapper wrapper-detail">
        <h2>Chi tiết sữa</h2>

        <div>
            <p>
                <img style = "width: 100px" src="<?php echo $row['thumbnail']; ?>"/> 
            </p>
            <div>

                <div>
                    <strong>Tên Sữa:</strong> <?php echo $row['name']; ?>
                </div>
                <div>
                    <strong>Hãng Sữa:</strong> <?php echo $row['nameBrand']; ?>
                </div>
                <div>
                    <strong>Trọng Lượng (gram):</strong> <?php echo $row['weight']; ?>
                </div>
                <div>
                    <strong>Giá (VND):</strong> <?php echo $row['price']; ?>
                </div>
        
                <div>
                    <form method="post">
                        <label for="quantity">Số Lượng:</label>
                        <input type="number" id="quantity" name="quantity">
                        <button class="btn btn-primary" type="submit" name="buy">Mua</button>
                    </form>
        
                
                </div>
            </div>
        </div>
    </div>
