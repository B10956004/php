<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章首頁</title>
</head>
<body>

<?php
$server_name="localhost";
$username="aecd0258";
$password="10956004";
$dbname="guestbook";
$db_port="3306";
$link=mysqli_connect($server_name,$username,$password,$dbname,$db_port); 
if(!@mysqli_connect($server_name,$username,$password,$dbname,$db_port)){
    die("無法連線至資料庫");
}
mysqli_query($link,"SET NAMES UTF8");

$select="SELECT name,title,date,sn,content FROM `guestbook` WHERE 1";
$result=mysqli_query($link,$select);


echo"<table border='1' >";
echo"<tr><td>發文人</td><td>標題</td><td>發表時間</td><td colspan='2'></td></tr>";
while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) { 
echo"<tr><td>$row[0]</td><td><a href='guestbook_content.php?sn=$row[3]'>$row[1]</a></td><td>$row[2]</td>";
echo"<td><a href='guestbook_update.php?name=$row[0]&title=$row[1]&sn=$row[3]&content=$row[4]'>修改</a></td>";
echo"<td><a href='guestbook_delete.php?sn=$row[3]'>刪除</a></td></tr>";
}
echo"</table>";
echo"<a href='guestbook_add.php'>發布新留言</a>";
?>
</body>
</html>