<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章內容</title>
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

$sn=$_GET['sn'];

$select="SELECT name,title,date,content,sn FROM `guestbook` WHERE sn='$sn'";
$result=mysqli_query($link,$select);
$row=mysqli_fetch_array($result,MYSQLI_NUM);


echo"<table border='1' >";
echo"<tr><td>發文人</td><td>標題</td><td>留言時間</td></tr>"; 
echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
echo"<tr><td colspan='3'>$row[3]</td></tr>";
echo"</table>";

echo"<a href='guestbook_reply.php?sn=$row[4]'>回覆留言</a>";

$select="SELECT name,content,date,sn,title_sn FROM `guestbook_reply` WHERE title_sn='$sn'";
$result=mysqli_query($link,$select);
echo"<table>";
echo"<tr><td>留言人</td><td>留言內容</td><td>留言時間</td></tr>"; 
while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) { 
echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
echo"<td><a href='guestbook_reply_update.php?name=$row[0]&content=$row[1]&sn=$row[3]&title_sn=$row[4]'>修改</a></td>";
echo"<td><a href='guestbook_reply_delete.php?title_sn=$sn&sn=$row[3]'>刪除</a></td></tr>";
}
echo"</table>";
echo"<a href='guestbook.php'>回首頁</a>";
?>
</body>
</html>