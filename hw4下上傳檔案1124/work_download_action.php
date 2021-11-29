<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
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
    $h1=$_POST['h1'];//sn
    while ($row = mysqli_fetch_array($result))
        {
        $sn = $row['sn'];
        $name = $row['name'];
        $type = $row['type'];
        $size = $row['size'];
        $title = $row['title'];
        $file = $row['file'];
        if($h1==$sn){ 
            header("Content-type: $type"); 
            header("Content-Length:". $size); //設定內容長度
            header("Accept-Length:".$size);
            header("Content-Disposition: attachment; filename=$name"); 
            header("content-transfer-encoding: binary");//此處增加編碼設定
            ob_clean();//此處最重要,目的是要清空輸出的位元組
            readfile("file/$name");
            }
        }
    ?>

