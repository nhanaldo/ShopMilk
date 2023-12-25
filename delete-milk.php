<?php 
session_start();
    // lay id can xoa
    $id = $_GET["milkid"];
    // ketnoi
    require_once("connect.php");
    // cau lenh xoa
    $sql = "delete from milk where milkid = '$id'";
    // tra ve du lieu tuong ung
    $result = mysqli_query($conn, $sql);
    if($result){
        mysqli_close($conn);    
        header("location:list-milk.php");
    }else{
        echo "xoa That bai" . mysqli_error($conn);
    }
?>