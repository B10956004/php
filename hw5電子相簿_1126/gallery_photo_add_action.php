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
    $server_name = "localhost";
    $username = "aecd0258";
    $password = "10956004";
    $dbname = "hw5";
    $db_port = "3306";

    $link = mysqli_connect($server_name, $username, $password, $dbname, $db_port);
    if (!@mysqli_connect($server_name, $username, $password, $dbname, $db_port)) {
        die("無法連線至資料庫");
    }
    mysqli_query($link, "SET NAMES UTF8");

    $F1_name = $_FILES['F1']['name'];
    $F1_type = $_FILES['F1']['type'];
    $F1_size = $_FILES['F1']['size'];
    $F1_tmp_name = $_FILES['F1']['tmp_name'];
    
    $album_sn=$_POST['h1'];
    $title=$_POST['T1'];

    $i=1;
    $F1_name_new=$F1_name;

    $fd=fopen($F1_tmp_name,"rb");

    if(is_dir("$album_sn") == "")
	{
		mkdir("$album_sn");
	}


    while(1){   
        
        if(file_exists("$album_sn/$F1_name"))
            {
                $F1_name_new=$i.'_'.$F1_name;
                $i=$i+1;
                move_uploaded_file($F1_tmp_name,"$album_sn/$F1_name_new");
                break;
            }
        else
        {
            move_uploaded_file($F1_tmp_name,"$album_sn/$F1_name_new");
            break;
        }
    }

    
    $file=fread($fd,filesize("$album_sn/$F1_name_new"));
    $file = addslashes($file);
    fclose($fd);
    

    mysqli_query($link,"INSERT INTO gallery_photo (`album_sn`,`title`,`file_name`) VALUES ('$album_sn','$title','$F1_name_new')");     
    if(mysqli_affected_rows($link))
        {echo "已新增檔案:$F1_name_new<BR>" ;
        header("location:gallery_album.php?sn=$album_sn");
        }
    else 
        echo"失敗<BR>";

    ?>
</body>

</html>