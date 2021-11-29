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

    $sql = "SELECT*FROM gallery_album";
    $result = mysqli_query($link, $sql);

    
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>封面</td>";
    echo "<td>拍攝者</td>";
    echo "<td>主題</td>";
    echo "<td>拍攝日期</td>";
    echo "<td>修改/刪除</td>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($result))/*逐行獲取結果集中的記錄，得到數組row*/ 
    {
        /*數組row的下標對應著資料庫中的欄位值*/
        $sn = $row['sn'];
        $name = $row['name'];
        $title=$row['title'];
        $date=$row['date'];
        $cover=@$row['cover'];
        echo "<tr>";
        if($cover!="")
        echo "<td><img src='$cover' width='25%' height='25%'></td>";
        else echo"<td></td>";
        echo "<td>$name</td>";
        echo "</form>";
        echo "<td><a href='gallery_album.php?sn=$sn'>$title</a></td>";
        echo "<td>$date</td>";
        echo "<td><a href='gallery_album.php?sn=$sn'>修改</a>/<a href=gallery_cover.php?file_name=NULL&snn=$sn>刪除</a></td>";
        echo "</tr>";
    }
    echo "<table />";

    ?>
    <a href="gallery_album_add.html">新增相簿</a>
</body>

</html>