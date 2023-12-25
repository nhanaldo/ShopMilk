<?php
session_start();



if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
}


?>

<?php
require_once("connect.php");

$userId = $_SESSION['username'];

$sql = "SELECT card.*, milk.name AS milkName, milk.price, user.userid
        FROM card
        INNER JOIN milk ON card.productId = milk.milkid
        INNER JOIN user ON card.userid = user.userid 
";
$result = mysqli_query($conn, $sql);

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
    <div class="wrapper">
        <h2>Giỏ Hàng Của User</h2>

            <table class="table" border = "1">
                
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Thành Tiền</th>
                        <th>Thao tác</th>
                    </tr>
              
                    <?php
                        while ($row = mysqli_fetch_assoc($result))
                        {

                    ?>                 
                        <tr>
                            <td><?php echo $row['userid']; ?></td>
                            <td><?php echo $row['milkName']; ?></td>
                            <td><?php echo $row['count']; ?></td>
                            <td><?php echo number_format($row['price']); ?> VND</td>
                            <td><?php echo number_format($row['count'] * $row['price']); ?> VND</td>
                            <td>
                            <a href="delete-cart-admin.php?cardId=<?php echo $row['cardId'];?>" onclick = " return confirm('Ban co chac chan muon xoa ko ')">Xoa</a>
                            </td>
                        </tr>
                        <?php
                }
                // dong ket noi 
                mysqli_close($conn);
            ?>
                   
            </table>
        
    </div>
   
