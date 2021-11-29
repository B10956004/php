<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>刪除文章</title>
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
mysqli_query($link,"DELETE FROM guestbook WHERE sn = $sn");
mysqli_query($link,"DELETE FROM guestbook_reply WHERE title_sn = $sn");
?>
<script language="JavaScript">
	alert("刪除文章成功");
	location.href="guestbook.php";
</script>

</body>
</html>