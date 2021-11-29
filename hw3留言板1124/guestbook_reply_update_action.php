<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新留言</title>
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

$content=$_POST['a1'];
$sn=$_POST['b4'];
$title_sn=$_POST['b5'];
mysqli_query($link,"UPDATE guestbook_reply SET content='$content' WHERE sn='$sn'");

echo"<script language='JavaScript'>";
echo"alert('留言內容修改成功');";
echo"location.href='guestbook_content.php?sn=$title_sn';";
echo"</script>";
?>
</body>
</html>