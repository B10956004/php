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

    $snnn=$_GET['sn'];//from gallery's title.
    $sql = "SELECT * FROM gallery_photo where `album_sn`=$snnn";
    $result = mysqli_query($link, $sql);

    echo "<table border=1>";
    echo "<tr>";
    $i=0;
    while ($row = mysqli_fetch_array($result))/*逐行獲取結果集中的記錄，得到數組row*/ 
    {
        $sn = $row['sn'];
        $album_sn = $row['album_sn'];
        $title=$row['title'];
        $file_name=$row['file_name'];
        echo "<td>圖片名稱:$file_name <a href=gallery_cover.php?file_name=$file_name&snn=$album_sn>設為封面</a> <BR><img src='$album_sn/$file_name' width='25%' height='25%'></td>";
        if($i>2){
            echo "</tr>";
            $i=0;
            echo"<tr>";
        }
        $i++;
    }
    
    echo "<table />";

    echo "<a href=gallery_photo_add.php?sn=$snnn>新增相片</a><BR>";
    echo "<a href=gallery.php>回首頁</a>";
    

    ?>

</body>

</html>