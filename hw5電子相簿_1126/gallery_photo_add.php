<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $server_name = "localhost";
    $username = "aecd0258";
    $password = "10956004";
    $dbname = "hw5";
    $db_port = "3306";

    $link = mysqli_connect($server_name, $username, $password, $dbname, $db_port);
    if (!@mysqli_connect($server_name, $username, $password, $dbname, $db_port)) {
        die("無法連線至資料庫");
    }
    mysqli_query($link, "SET NAMES UTF8");

    $sn=$_GET['sn'];//from gallery_album.
    
    echo"<form method='POST' enctype='multipart/form-data' action='gallery_photo_add_action.php'>";
    echo"檔案上傳:<input type='file' name='F1' size='20'><BR>";
    echo"<input type='hidden' name='h1' value='$sn'>";
    echo"檔案說明:<input type='text' name='T1' size='20'><BR>";
    echo"<input type='submit' value='送出' name='s1'>";
    echo"</form>";
    ?>
</body>

</html>