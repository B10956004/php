<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>貼圖片</title>
    <style>
        img{
            max-width: 120px;
        }
    </style>
    <?php

    function pasteImage(){
        echo "<a href='https://cdn.wallpapersafari.com/69/71/Mg71Q0.jpg'><img src='https://cdn.wallpapersafari.com/69/71/Mg71Q0.jpg'></a>";
    }
    ?>
</head>
<body>
    <?php
    pasteImage();
    ?>
    
</body>
</html>