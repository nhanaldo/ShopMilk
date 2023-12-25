<?php
session_start();


if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
}


?>

<?php

require_once("connect.php");





if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $thumbnail = $_POST["thumbnail"];
    $nameBrand = $_POST["nameBrand"];
    $weight = $_POST["weight"];
    $price = $_POST["price"];

    
        $sql = "INSERT INTO milk (name, nameBrand, weight, price, thumbnail) VALUES ('$name', '$nameBrand', '$weight', '$price', '$thumbnail')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: list-milk.php");
            exit();
        } else {
            echo "Đã xảy ra lỗi khi thêm thông tin sữa mới: " . mysqli_error($conn);
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
    <div class="wrapper">
        <h2>Tạo sửa mới</h2>
        <div>
            <a class="btn btn-primary" href="admin.php">Trang Admin</a>
        </div>
        <form  method='POST'>
            <div>
                <label>Tên Sữa:</label>
                <input type='text' name='name' required />
            </div>
            <div>
                <label>Ảnh Sữa:</label>
                <input type='text' name='thumbnail' required />
            </div>
            <div>
                <label>Tên Hãng Sữa:</label>
                <input type='text' name='nameBrand' required />
            </div>
           
            <div>
                <label>Trọng Lượng (gram):</label>
                <input type='number' name='weight' required />
            </div>
            <div>
                <label>Giá (VND):</label>
                <input type='number' name='price' required />
            </div>

            <button type='submit' name="submit" class="btn btn-primary">
                Thêm Sữa
            </button>

        </form>
    </div>
