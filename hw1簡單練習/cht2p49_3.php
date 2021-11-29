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
    $i = $_POST['h1']; //人數
    $j = 1;
    $sum = 0;
    $highest = $_POST["std1"];
    $name=0;
    $grade[1] = 0;
    for ($j = 1; $j <= $i; $j = $j + 1) {
        $sum += $_POST["std$j"];
    } //加總
    $avge = $sum / $i; //平均
    echo "平均:" . number_format($avge, 2, ".", ",")  . "<br>";
    for ($j = 1; $j <= $i; $j = $j + 1) {
        if ($_POST["std$j"] < 60) {
            echo "學生" . $j . ":" . $_POST["std$j"] . "分->不及格<br>";
        } else {
            continue;
        }
    } //判斷及格
    for ($j = 1; $j <= $i; $j = $j + 1) {
        $grade[$j] = $_POST["std$j"];
        if ($grade[$j] > $highest) {
            $highest = $_POST["std$j"];
            $name=$j;
        } else continue;
    }
    echo "學生".$name."最高分:" . $highest . "<br>"; //最高分
    ?>
</body>

</html>