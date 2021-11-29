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
    //db參數
    $server_name = "localhost";
    $username = "aecd0258";
    $password = "10956004";
    $dbname = "hw4";
    $db_port = "3306";

    $link = mysqli_connect($server_name, $username, $password, $dbname, $db_port);//連結資料庫
    if (!@mysqli_connect($server_name, $username, $password, $dbname, $db_port)) {
        die("無法連線至資料庫");
    }
    mysqli_query($link, "SET NAMES UTF8");

    $sql = "SELECT*FROM document";
    $result = mysqli_query($link,$sql); //執行SQL語句，獲得結果集


    //列印表格
    echo "<table border=1>";
        echo "<tr>";
        echo "<td>流水號</td>";
        echo "<td>檔案名稱</td>";
        echo "<td>檔案類型</td>";
        echo "<td>檔案大小</td>";
        echo "<td>說明</td>";
        echo "<td>點我下載</td>";
        echo "</tr>";
        
        while ($row = mysqli_fetch_array($result))/*逐行獲取結果集中的記錄，得到數組row*/ 
        {/*數組row的下標對應著資料庫中的欄位值*/
        $sn = $row['sn'];
        $name = $row['name'];
        $type = $row['type'];
        $size = $row['size'];
        $title = $row['title'];
        $file = $row['file'];
        $reject=@$_POST['no'];
        if($reject=='no')
        {
            mysqli_query($link,"DELETE FROM `document` WHERE `document`.`sn` = $sn");
            break;
        }
        echo "<tr>";
        echo "<td>$sn</td>";
        echo "<td>$name</td>";
        echo "<td>$type</td>";
        echo "<td>$size</td>";
        echo "<td>$title</td>";
        echo "<td>";
        echo "<form method='POST' action='work_download_action.php'>";
        echo "<input type='hidden' name='h1' value='$sn'>";
        echo "<input type='submit' value='下載' name='download'>";
        echo "</form>";
        echo"</td>";
        echo "</tr>";
        }
    echo "<table />";

    

    

    ?>
    <a href="./work.html">回首頁</a>
</body>

</html>