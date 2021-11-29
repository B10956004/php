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
    //open print
    /*$n = 10;
    $str = "hello";

    $fop = fopen("practice1.txt","w");
    fprintf($fop,"%s %s",$n,$str);
    fclose($fop);*/
    
    //open scan
    /*$fop = fopen("practice1.txt","r");
    fscanf($fop,"%s %s",$n,$str);
    fclose($fop);

    echo "$n $str";*/

    //count 存整數0
    $fp = fopen("count.txt","r");
    fscanf($fp,"%d",$num);
    fclose($fp);
    $num++;
    echo "留言人數：$num";

    $fp = fopen("count.txt","w");
    fprintf($fp,"%d",$num);
    fclose($fp);

    
    $i=1;
    if($i=$num){
        $textarea1 = nl2br($_POST['S1']);
        $fp = fopen("message$i.txt","w");
        fprintf($fp,"%s",$textarea1);
        fclose($fp);
        $i++;
    }
    
    ?>
</body>
</html>