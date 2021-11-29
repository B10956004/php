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

    
    $name=$_POST['T1'];
    $title=$_POST['T2'];
    $date=$_POST['D1'];

    mysqli_query($link,"INSERT INTO gallery_album (`name`,`title`,`date`) VALUES ('$name','$title','$date')");     
    if(mysqli_affected_rows($link))
        {echo "已新增相簿<BR>" ;
        header("location:gallery.php");
        exit;}
    else 
        echo"失敗<BR>";

    ?>
</body>

</html>