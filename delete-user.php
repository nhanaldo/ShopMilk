<?php
session_start();



if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
}


?>

<?php


    $id = $_GET["userid"];
    // ketnoi
    require_once("connect.php");

    $Sql = "DELETE FROM user WHERE userid = '$id'";
    $Result = mysqli_query($conn, $Sql);

    if ($Result) {
        header("Location: user.php");
        exit();
    } else {
        echo "Có lỗi xảy ra trong quá trình xóa user: " . mysqli_error($conn);
    }

?>
