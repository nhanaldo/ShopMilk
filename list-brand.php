<?php
session_start();


if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
}


?>

<?php

require_once("connect.php");
$sql = "SELECT * FROM brand";
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
        <h2>Danh sách hãng sữa</h2>
        <div>
            <a class="btn btn-primary" href="admin.php">Trang Admin</a>

        </div>

            <table class="table"  border="1">
                
                    <tr>
                        <th>Mã Hãng</th>
                        <th>Tên hãng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Thao tác</th>
                    </tr>
             
                <?php
                        while ($row = mysqli_fetch_assoc($result))
                        {

                ?>
                    
                        <tr>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['nameBrand']; ?></td>
                            <td><?php echo $row['adress']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                                <a href='update-brand.php?code=<?php echo $row['code']; ?>'>Sửa</a>
                                <a href="delete-brand.php?code=<?php echo $row['code'];?>" onclick = " return confirm('Ban co chac chan muon xoa ko ')">Xoa</a>
                            </td>
                        </tr>
                    
                
                <?php
                }
                // dong ket noi 
                mysqli_close($conn);
            ?>
            </table>
       
    </div>

