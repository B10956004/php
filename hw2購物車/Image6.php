<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>類別和建構式</title>
    <?php
    /*
    class person{
        var $name;
        var $phone;
        var $email;
        function input(){
            $this->name=$_POST['T1'];
            $this->phone=$_POST['T2'];
            $this->email=$_POST['T3'];
        }
        function output(){
            echo "<table border='1'>";
            echo "<tr><td>Name：</td><td>$this->name</td></tr>\n";
            echo "<tr><td>Phone：</td><td>$this->phone</td></tr>\n";
            echo "<tr><td>Email：</td><td>$this->email</td></tr>\n";
            echo "</table>\n";
        }
    }*/
    class Image{
        var $name;
        var $width;
        function Image(){
            $this->name=$_POST['T1'];
            $this->width=$_POST['T2'];
        }
        function showImage(){
            echo "貼一張圖<br>";
            echo "<a href='$this->name'><img src='$this->name' width='$this->width'px></a><br>";
            echo "<br>";
        }
        function showImage4(){
            echo "貼四張圖<br>";
            for($i=0;$i<4;$i++){
                echo "<a href='$this->name'><img src='$this->name' width='$this->width'px></a>";
            }
            echo "<br>";
        }
        function showImage4x4(){
            echo "貼4x4張圖<br>";
            for($i=0;$i<4;$i++){
                for($j=0;$j<4;$j++){
                    echo "<a href='$this->name'><img src='$this->name' width='$this->width'px></a>";
                }
                echo "<br>";
            }
        } 
    }

    ?>
</head>
<body>
    <?php
    /*
    $p = new person;
    $p->input();
    $p->output();
    */
    $p = new Image;
    $p->showImage();
    echo "<br>";
    $p->showImage4();
    echo "<br>";
    $p->showImage4x4();


    ?>
</body>
</html>