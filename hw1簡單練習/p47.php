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
    $G1 = $_POST['g1'];
    $G2 = $_POST['g2'];
    $G3 = $_POST['g3'];
    $word = $_POST['number'];
    $temp = 0;
    if ($word == "合格狀況") {
        for ($i = 1; $i < 4; $i = $i + 1) {
            if ($_POST["g$i"] >= 60) {
                echo "學生" . "$i" . "->及格" . ":" . $_POST["g$i"] . "<BR>";
            }
        }
    }
    if ($word == "平均數") {
        for ($i = 1; $i < 4; $i = $i + 1) {
            $temp += $_POST["g$i"];
        }
        $temp = $temp / 3;
        echo "平均數:" .number_format($temp,2,".",",")  . "<br>";
    }
    ?>

</body>

</html>