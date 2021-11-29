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

    if (file_exists("file/$F1_name")) {
        echo "檔案已存在<br><br>";
        echo "檔案名稱:$F1_name<br>";
        echo "檔案類型:$F1_type<br>";
        echo "檔案大小:$F1_size<br>";
        echo "暫存檔名稱:$F1_tmp_name<br>";
    } else {
        move_uploaded_file($F1_tmp_name, "file/$F1_name");
        echo "檔案上傳完畢<br><br>";
        echo "檔案名稱:$F1_name<br>";
        echo "檔案類型:$F1_type<br>";
        echo "檔案大小:$F1_size<br>";
        echo "暫存檔名稱:$F1_tmp_name<br>";
    }
    ?>




</body>

</html>