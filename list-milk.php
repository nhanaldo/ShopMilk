<?php
session_start();


if ($_SESSION['role'] !== 'admin') {
    header("Location: home.php");
    exit();
}


?>

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
    <link rel="stylesheet" href="assect/css/main.css">
    <title>Document</title>
</head>

<body>
<a href="trangchu.php">Trang Chủ</a>
    <div class="wrapper">
        <h2>Danh sách sữa</h2>
        <div>
            <a class="btn btn-primary" href="admin.php">Trang Admin</a>
        </div>

            <table class="table" border="1">
          
                    <tr>
                        <th>ID</th>
                        <th>Tên Sữa</th>
                        <th>Ảnh</th>
                        <th>Hãng Sữa</th>
                        <th>Trọng Lượng</th>
                        <th>Giá</th>
                        <th>Thao tác</th>
                    </tr>
             
                    <?php
                        while ($row = mysqli_fetch_assoc($result))
                        {

                ?>
              
                        <tr>
                            <td><?php echo $row['milkid']; ?></td>
                            <td ><?php echo $row['name']; ?></td>
                            <td>
                                <img style="width: 50px" src="<?php echo $row['thumbnail']; ?>" />
                            </td>
                            <td><?php echo $row['nameBrand']; ?></td>
                            <td><?php echo $row['weight']; ?>g</td>
                            <td><?php echo $row['price']; ?>đ</td>
                            <td>
                                <a href='update-milk.php?milkid=<?php echo $row['milkid']; ?>'>Sửa</a>
                                <a href="delete-milk.php?milkid=<?php echo $row['milkid'];?>" onclick = " return confirm('Ban co chac chan muon xoa ko ')">Xoa</a>
                            </td>
                        </tr>
                    
                        <?php
                }
                // dong ket noi 
                mysqli_close($conn);
            ?>
               
            </table>
       
        
    </div>

