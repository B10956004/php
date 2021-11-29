<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言回覆</title>
</head>
<body>

<form method="POST" action="guestbook_reply_action.php">
    <?php
    $sn=$_GET['sn'];
    echo"留言人：<input type='text' name='a1'><br>";
    echo"留言內容：<input type='text' name='a2'><br>";
    echo"<input type='hidden' value='$sn' name='a3'>";
    echo"<input type='submit' value='提交' name='b1'>";
    ?>
</form>

</body>
</html>