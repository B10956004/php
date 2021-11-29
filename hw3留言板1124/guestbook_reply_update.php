<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改留言</title>
</head>
<body>
<?php    
$sn=$_GET['sn'];
$name=$_GET['name'];
$title_sn=$_GET['title_sn'];
$content=$_GET['content'];
echo"<form method='POST' action='guestbook_reply_update_action.php'>";
echo"留言人：$name<br>";
echo"留言內容：<input type='text' name='a1' value='$content'><br>";
echo"<input type='hidden' value='$sn' name='b4'>";
echo"<input type='hidden' value='$title_sn' name='b5'>";
echo"<input type='submit' value='提交' name='b6'>";
echo"</form>";
 ?>
</body>
</html>