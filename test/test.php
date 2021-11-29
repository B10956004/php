<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
        <!--only for php 
        $變數名稱''=>一般型態 ""=>字串
        echo後''or""or不包;
        $a.$b=$a+$b;
        \n換行-->
<body>
    <?php
    //https://liaosankai.pixnet.net/blog/post/27533126 pathinfo找檔名
    $filename = '菊花開.gif';
    //$file_lengh=strlen($filename);//總長度
    $file_head1 = pathinfo($filename, PATHINFO_FILENAME);//主檔名
    $file_type = pathinfo($filename, PATHINFO_EXTENSION);//取副檔名 //gif
    //$file_type_lengh=strlen($file_type)+1;//.+回來
    //$file_head2=substr($filename,0,$file_lengh-$file_type_lengh);//主檔名
    echo "$file_head1(1).$file_type";
    ?>
    
</body>
</html>

