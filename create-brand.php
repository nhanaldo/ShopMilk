<?php
session_start();



if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
}


?>

<?php

require_once("connect.php");

if (isset($_POST["dangki"])) {
    $code = $_POST["code"];
    $nameBrand = $_POST["nameBrand"];
    $adress = $_POST["adress"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];


    
    $sql = "INSERT INTO brand (code, nameBrand, adress, phone, email) VALUES ('$code', '$nameBrand', '$adress', '$phone', '$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: list-brand.php");
        exit();
    } else {
        echo "Có lỗi xảy ra trong quá trình thêm brand: ";
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
        <h2>Tạo brand mới</h2>
        <div><a class="btn btn-primary" href="admin.php">Trang Admin</a></div>

        <form action='create-brand.php' class="form" method='POST'>
            <div>
                <label>Mã Hãng :</label>
                <input type='text' name='code' />
            </div>
            <div>
                <label>Tên hãng :</label>
                <input type='text' name='nameBrand' />
            </div>
            <div>
                <label>Địa chỉ hãng : </label>
                <input type='text' name='adress' />
            </div>
            <div>
                <label>Số điện thoại : </label>
                <input type='text' name='phone' />
            </div>

            <div>
                <label>Email: </label>
                <input type='text' name='email' />
            </div>

            <button type='submit' name="dangki" class="btn btn-primary">
                Tạo ngay
            </button>

            <?php
            // Display error messages
            
            ?>

            <form>
    </div>

