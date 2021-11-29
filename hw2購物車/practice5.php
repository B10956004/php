<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表格圖片</title>
    <?php
    function showImage4x4($name,$w){
        for($i=0;$i<4;$i++){
            for($j=0;$j<4;$j++){
                echo "<a href='$name'><img src='$name' width='$w'px></a>";
            }
            echo "<br>";
        }
    }
    ?>
</head>
<body>
    <?php
    showImage4x4("https://wallpaperaccess.com/full/1275417.jpg",240);
    ?>
</body>
</html>