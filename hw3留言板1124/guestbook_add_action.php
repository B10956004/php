<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>增新文章</title>
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
       $name=$_post['a1'];
       $title=$_POST['a2'];
       $date=date("Y-m-d H:i:s");
       $content=$_POST['a3'];
       mysqli_query($link,"INSERT INTO guestbook (`name`,`title`,`date`,`content`) VALUES ('$name','$title','$date',;$content')");     
    ?>
    <script language="JavaScript">
        alert("發文成功")
        location.href="guestbook.php";
    </script>
</body>
</html>