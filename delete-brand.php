<?php 
session_start();
    // lay id can xoa
    $id = $_GET["code"];
    // ketnoi
    require_once("connect.php");
    // cau lenh xoa
    $sql = "delete from brand where code = '$id'";
    // tra ve du lieu tuong ung
    $result = mysqli_query($conn, $sql);
    if($result){
        mysqli_close($conn);    
        header("location:list-brand.php");
    }else{
        echo "xoa That bai" . mysqli_error($conn);
    }
?>
<?php






