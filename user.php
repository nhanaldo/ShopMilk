<?php
session_start();



if ($_SESSION['role'] !== 'admin') {
    header("Location: trangchu.php");
    exit();
}


?>

<?php
require_once("connect.php");

$sql = "SELECT * FROM user WHERE user.role != 'admin'";
$result = mysqli_query($conn, $sql);


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
        <h2>Danh sách người dùng</h2>
        <div>
            <a class="btn btn-primary" href="admin.php">Trang Admin</a>
        </div>

       
            <table class="table" border = "1">
                
                    <tr>
                       
                        <th>Tên Tài Khoản</th> 
                        <th>Email</th>
                        <th>PassWord</th>
                        <th>Thao tác</th>
                    </tr>
               

                    <?php
                        while ($row = mysqli_fetch_assoc($result))
                        {

                    ?>
                
                    
                        <tr>
                            <td><?php echo $row['userid']; ?></td>
                            
                            <td><?php echo $row['email']; ?></td>
                           
                            <td><?php echo $row['pass']; ?></td>
                            <td>
                            <a href="delete-user.php?userid=<?php echo $row['userid'];?>" onclick = " return confirm('Ban co chac chan muon xoa ko ')">Xoa</a>
                            </td>
                        </tr>
                        <?php
                }
                // dong ket noi 
                mysqli_close($conn);
            ?>
                    
                
            </table>
        
        
        </script>
    </div>

