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
        echo "<form method='POST' action='score_output.php'>";
        $i=1;
        $j=$_POST['std'];
        for($i==1;$i<$j+1;$i=$i+1)
        {
            echo "學生".$i.":<input type='text'name='std$i' size='20' value=''><br>";
        }
        echo "<input type='hidden' name='h1' value='$j'>";
        echo "<input type='submit' value='送出'name='enter'>";
        echo "</form>";
        
        ?>
</body>

</html>