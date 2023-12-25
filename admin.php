<?php
session_start();


if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
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
    <div class="wrapper-admin">

        <h1>Trang Admin</h1>

        <ul>
            <li>
                <a class="btn btn-primary" href="list-brand.php">Danh sách hãng sữa</a>
            </li>
            <li>
                <a class="btn btn-primary" href="list-milk.php">Danh sách sữa</a>
            </li>
            <li>
                <a class="btn btn-primary" href="create-brand.php">Thêm hãng sữa mới</a>
            </li>
            <li>
                <a class="btn btn-primary" href="create-milk.php">Thêm sữa mới</a>
            </li>
            <li>
                <a class="btn btn-primary" href="user.php">Danh sách người dùng</a>
            </li>
            <li>
                <a class="btn btn-primary" href="cart-admin.php">Danh sách giỏ hàng</a>
            </li>
        </ul>
    <div>

