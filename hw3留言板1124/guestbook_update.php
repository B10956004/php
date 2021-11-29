<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改文章</title>
</head>
<body>
<?php
$sn=$_GET['sn'];
$name=$_GET['name'];
$title=$_GET['title'];
$content=$_GET['content'];

echo"<form method='POST' action='guestbook_update_action.php'>";
echo"留言人：$name<br>";
echo"主題：$title<br>";
echo"留言內容：<input type='text' name='content' value='$content'><br>";
echo"<input type='hidden' value='$sn' name='b2'>";
echo"<input type='submit' value='提交' name='b3'>";
echo"</form>";
?>
</body>
</html>