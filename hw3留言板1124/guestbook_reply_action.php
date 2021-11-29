<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>增新留言</title>
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

$name=$_POST['a1'];
$title_sn=$_POST['a3'];
$date=date("Y-m-d H:i:s");
$content=$_POST['a2'];
mysqli_query($link,"INSERT INTO guestbook_reply (`name`,`title_sn`,`date`,`content`) VALUES ('$name','$title_sn','$date','$content')");

echo"<script language='JavaScript'>";
echo"alert('留言成功');";
echo"location.href='guestbook_content.php?sn=$title_sn';";
echo"</script>";
?>
</body>
</html>