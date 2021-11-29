<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>檔名寬度圖片</title>
    <?php
    function hyperImage($name,$w){
        echo "<a href='$name'><img src='$name' width='$w'px></a>";
    }
    ?>
</head>
<body>
    <?php
    hyperImage("https://cdn.wallpapersafari.com/69/71/Mg71Q0.jpg",120);
    hyperImage("https://cdn.wallpapersafari.com/69/71/Mg71Q0.jpg",240);
    hyperImage("https://cdn.wallpapersafari.com/69/71/Mg71Q0.jpg",480);
    ?>
</body>
</html>