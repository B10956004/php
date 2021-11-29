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
        $n = 0;
        echo "你喜歡:<br><br>";
        if(isset($_POST['C1'])){
            $checkbox1 = $_POST['C1'];
            echo "$checkbox1<br>";
            $n++;
        }
        if(isset($_POST['C2'])){
            $checkbox2 = $_POST['C2'];
            echo "$checkbox2<br>";
            $n++;
        }
        if(isset($_POST['C3'])){
            $checkbox3 = $_POST['C3'];
            echo "$checkbox3<br>";
            $n++;
        }
        if(isset($_POST['C4'])){
            $checkbox4 = $_POST['C4'];
            echo "$checkbox4<br>";
            $n++;
        }
        if(isset($_POST['C5'])){
            $checkbox5 = $_POST['C5'];
            echo "$checkbox5<br>";
            $n++;
        }
        echo "<br>你有{$n}個興趣";
    ?>
</body>
</html>