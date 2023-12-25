

<?php
  session_start();
  if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
    $isAdmin = true;
} else{
    $isAdmin = false;
}

?>
<?php
if(!isset($_SESSION["username"] ))
{
    header("location:DN.php");
}

echo "<a href='dangxuat.php'>Dang Xuat</a>";
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="anh/milk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script src="https://kit.fontawesome.com/10dfeb6bc7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="giao_dien_webMilk.css">
</head>
<body>

    <?php
        if ($isAdmin) {
            echo '<a href="admin.php" class="btn btn-primary">Trang Admin</a>';
        }
    ?>

        <?php 
        include ("hearder.php");  
        ?>
        <?php 
        include ("menu.php");
        ?>
        <?php 
        include ("footer.php");
        ?>

</body>
</html>