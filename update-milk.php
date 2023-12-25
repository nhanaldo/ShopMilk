<?php
session_start();


if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
}


?>

<?php


require_once("connect.php");

    $id=$_GET["milkid"];


    $sql = "SELECT * FROM milk WHERE milkid = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 


    // echo $row['nameBrand'];
    // return;
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $nameBrand = $_POST["nameBrand"];
        $category = $_POST["category"];
        $weight = $_POST["weight"];
        $price = $_POST["price"];
        $thumbnail = $_POST["thumbnail"];

        
    
        
            $sql= "UPDATE milk SET name = '$name', nameBrand = '$nameBrand', thumbnail = '$thumbnail', category = '$category', weight = '$weight', price = '$price' WHERE milkid = '$id'";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                header("Location: list-milk.php");
                exit();
            } else {
                echo  "Đã xảy ra lỗi khi cập nhật thông tin sữa: " . mysqli_error($conn);
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
    <h2>Sửa Sữa</h2>
        <div><a class="btn btn-primary" href="admin.php">Trang Admin</a></div>

        <form  method='POST'>
            <div>
                <label>Tên Sữa:</label>
                <input type='text' name='name' value='<?php echo $row['name']; ?>' required />
            </div>
            <div>
                <label>Link ảnh Sữa:</label>
                <input type='text' name='thumbnail' value='<?php echo $row['thumbnail']; ?>' required />
            </div>
            <div>
                <label>Tên Hãng Sữa:</label>
                <input type='text' name='nameBrand' value='<?php echo $row['nameBrand']; ?>' required />
            </div>
            <div>
                <label>Loại Sữa:</label>
                <input type='text' name='category' value='<?php echo $row['category']; ?>' required />
            </div>
            <div>
                <label>Trọng Lượng (gram):</label>
                <input type='number' name='weight' value='<?php echo $row['weight']; ?>' required />
            </div>
            <div>
                <label>Giá (VND):</label>
                <input type='number' name='price' value='<?php echo $row['price']; ?>' required />
            </div>

            <button type='submit' name="submit" class="btn btn-primary">
                Lưu Thay Đổi
            </button>

           
        </form>
    </div>

