<?php
session_start();


if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
}


?>

<?php


require_once("connect.php");

    $id=$_GET["code"];
    // echo $id;
    // return;

    $sql = "SELECT * FROM brand WHERE code = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 

    // echo $row['nameBrand'];
    // return;
    if (isset($_POST["capnhat"])) {

        $newCode = $_POST["newCode"];
        $newNameBrand = $_POST["newNameBrand"];
        $newAdress = $_POST["newAdress"];
        $newPhone = $_POST["newPhone"];
        $newEmail = $_POST["newEmail"];

   
        $sql= "UPDATE brand SET code = '$newCode', nameBrand = '$newNameBrand', adress = '$newAdress', phone = '$newPhone', email = '$newEmail' WHERE code = '$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: list-brand.php");
            exit();
        } else {
            echo "Có lỗi xảy ra trong quá trình cập nhật brand: " . mysqli_error($conn);
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

    <div class="wrapper">
        <h2>Sửa thông tin Brand</h2>
        <div><a class="btn btn-primary" href="admin.php">Trang Admin</a></div>

       
            <form method='POST'>
                <div>
                    <label>Mã Hãng :</label>
                    <input type='text' name='newCode' value='<?php echo $row['code']; ?>' />
                </div>
                <div>
                    <label>Tên hãng :</label>
                    <input type='text' name='newNameBrand' value='<?php echo $row['nameBrand']; ?>' />
                </div>
                <div>
                    <label>Địa chỉ hãng : </label>
                    <input type='text' name='newAdress' value='<?php echo $row['adress']; ?>' />
                </div>
                <div>
                    <label>Số điện thoại : </label>
                    <input type='text' name='newPhone' value='<?php echo $row['phone']; ?>' />
                </div>
                <div>
                    <label>Email: </label>
                    <input type='text' name='newEmail' value='<?php echo $row['email']; ?>' />
                </div>
                <button type='submit' name="capnhat" class="btn btn-primary">
                    Cập nhật
                </button>
               
            </form>
       
    </div>

