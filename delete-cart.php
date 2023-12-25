<?php


session_start();


require_once("connect.php");


    $cartId = $_GET['cardId'];

    $sql = "DELETE FROM card WHERE cardId = '$cartId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: cart.php");
        exit();
    } else {
        echo "Đã xảy ra lỗi khi xóa đơn hàng: " . mysqli_error($conn);
    }
 
