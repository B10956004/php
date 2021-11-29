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

    $file_name = @$_GET['file_name'];
    $snn = @$_GET['snn']; //album_sn
    if ($file_name == 'NULL')
        mysqli_query($link, "UPDATE `gallery_album` SET `cover` = NULL WHERE `gallery_album`.`sn` = $snn;");
    else
        mysqli_query($link, "UPDATE `gallery_album` SET `cover` = '$snn/$file_name' WHERE `gallery_album`.`sn` = $snn;");



    header("location:gallery.php");



    ?>
</body>

</html>