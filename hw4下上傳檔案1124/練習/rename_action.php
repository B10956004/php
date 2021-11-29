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
    $F1_name = $_FILES['F1']['name'];
    $F1_type = $_FILES['F1']['type'];
    $F1_size = $_FILES['F1']['size'];
    $F1_tmp_name = $_FILES['F1']['tmp_name'];

    $i=1;
    $F1_name_new=$F1_name;
    while(1){   
        
        if(file_exists("file/$F1_name"))
            {
                $F1_name_new=$i.'_'.$F1_name;
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
    echo "檔案上傳完畢,檔名:$F1_name_new<br><br>";
   
    ?>




</body>

</html>