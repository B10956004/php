<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    $server_name="localhost";
    $username="aecd0258";
    $password="10956004";
    $dbname="hw4";
    $db_port="3306";

    $link=mysqli_connect($server_name,$username,$password,$dbname,$db_port);
        if(!@mysqli_connect($server_name,$username,$password,$dbname,$db_port)){
            die("無法連線至資料庫");
        }
        mysqli_query($link,"SET NAMES UTF8");

    $F1_name = $_FILES['F1']['name'];
    $F1_type = $_FILES['F1']['type'];
    $F1_size = $_FILES['F1']['size'];

    $F1_tmp_name = $_FILES['F1']['tmp_name'];
 
    $content=$_POST['T1'];

    $i=1;
    $F1_name_new=$F1_name;

    $fd=fopen($F1_tmp_name,"rb");

    $file_lengh=strlen($F1_name_new);//總長度
    $file_type = pathinfo($F1_name_new, PATHINFO_EXTENSION);//取副檔名 //gif
    $file_type_lengh=strlen($file_type)+1;//把.+回來
    $file_head=substr($F1_name_new,0,$file_lengh-$file_type_lengh);//主檔名

    while(1){   
        
        if(file_exists("file/$F1_name"))
            {
                $F1_name_new=$file_head.'('.$i.')'.'.'.$file_type;
                $i=$i+1;
                move_uploaded_file($F1_tmp_name,"file/$F1_name_new");
                break;
            }
        else
        {
            move_uploaded_file($F1_tmp_name,"file/$F1_name_new");
            break;
        }
    }

    
    $file=fread($fd,filesize("file/$F1_name_new"));
    $file = addslashes($file);
    fclose($fd);
    

    mysqli_query($link,"INSERT INTO document (`name`,`type`,`size`,`title`,`file`) VALUES ('$F1_name_new','$F1_type','$F1_size','$content','$file')");     
    if(mysqli_affected_rows($link))
        echo "已新增檔案:$F1_name_new<BR>" ;
    else 
        echo"失敗<BR>";
    



        ?>
    <a href="./work.html">回首頁</a>
</body>

</html>