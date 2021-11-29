<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找陣列最大數字</title>
    
    <?php
    /*function inc(&$n){
        $n++;
        echo ".n=$n<br>";
    }*/

    function findMax($data){
        $bignum = 0;
        foreach($data as $num){
            if($num > $bignum){
                $bignum = $num;
            }
            
        }
        return $bignum;
    }
    ?>
</head>
<body>
    <?php
    /*$n=0;
    inc($n);
    echo "n=$n<br>";
    */
    
    /*$data[0] = 49;
    $data[1] = 68;
    $data[2] = 72;
    $data["abc"] = "text";
    foreach($data as $v){
        echo "$v<br>";
    }*/

    $data[0] = 48;
    $data[1] = 97;
    $data[2] = 69;
    $data[3] = 103;
    $max = findMax($data);
    echo "最大數字=$max";
    ?>
</body>
</html>