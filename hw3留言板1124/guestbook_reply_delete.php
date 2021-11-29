<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>刪除留言</title>
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

$r_sn=$_GET['sn'];
$title_sn=$_GET['title_sn'];
$sn=$title_sn;

mysqli_query($link,"DELETE FROM guestbook_reply WHERE sn=$r_sn");

echo"<script language='JavaScript'>";
echo"alert('刪除留言成功');";
echo"location.href='guestbook_content.php?sn=$sn';";
echo"</script>";
?>
</body>
</html>