<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    class Cart{
        var $pNum1;
        var $pNum2;
        var $pNum3;
        var $Name;
        var $Phone;
        var $Address;
        var $Email; 

        function Cart(){
            $this->pNum1=$_POST["p1"];
            $this->pNum2=$_POST["p2"];
            $this->pNum3=$_POST["p3"];
            $this->Name=$_POST["D1"];
            $this->Phone=$_POST["D2"];
            $this->Address=$_POST['D3'];
            $this->Email=$_POST['D4'];
        }
        function addCart($data){
            $summon = 0;
            for($i=0;$i<3;$i++){
                $summon += $data[$i];
            }
            return $summon;
        }
        function summon($data){
            $summon = 0;
            $price1 = 3988;
            $price2 = 4699;
            $price3 = 1190;
            $summon = $data[0]*$price1 + $data[1]*$price2 + $data[2]*$price3;
            return $summon;
        }
        function printCart(){

        }
    }
    
    ?>
</head>
<body>
    <?php
    
    $fp = fopen("peopleCount.txt","r");
    fscanf($fp,"%d",$num);
    fclose($fp);
    $num++;
    echo "網站購物人數：$num <br>";

    $fp = fopen("peopleCount.txt","w");
    fprintf($fp,"%d",$num);
    fclose($fp);

    $data[0] = $_POST["p1"];
    $data[1] = $_POST["p2"];
    $data[2] = $_POST["p3"];
    

    $C = new Cart;
    $C->addCart($data);
    $newNum = $C->addCart($data);
    echo "商品總數量為$newNum 個<br>";
    
    $C->summon($data);
    $newPrice = $C->summon($data);
    echo "商品總價錢為$newPrice 元新台幣<br>";

    $freight = 60 + $newPrice;
    echo "含運費價錢為$freight 元新台幣<br>";

    echo "<br>";
    
    $mouth = $_POST['s1'];
    $date = $_POST['s2']; 
    $delivery = $_POST['c1'];
    $opinion = nl2br($_POST['area1']);

    $i=1;
    if($i=$num){
        $newName = nl2br($_POST['D1']);
        $newPhone = nl2br($_POST['D2']);
        $newAddress = nl2br($_POST['D3']);
        $newEmail = nl2br($_POST['D4']);
        $fp = fopen("Cart_$i.txt","w");
        fprintf($fp,"姓名：%s\n",$newName);
        fprintf($fp,"電話：%s\n",$newPhone);
        fprintf($fp,"地址：%s\n",$newAddress);
        fprintf($fp,"E-mail：%s\n",$newEmail);
        fprintf($fp,"商品總數量：%d個\n",$newNum);
        fprintf($fp,"商品價錢：%d元新台幣\n",$newPrice);
        fprintf($fp,"含運費價錢：%d元新台幣\n",$freight);
        fprintf($fp,"送貨日期：%d月%d日\n",$mouth,$date);
        fprintf($fp,"送貨方式：%s\n",$delivery);
        fprintf($fp,"回饋意見：%s\n",$opinion);
        fclose($fp);
        $i++;
    }

    echo "請核對以下資料是否填寫錯誤<br><br>";
    echo "姓名：$newName <br>";
    echo "電話：$newPhone <br>";
    echo "地址：$newAddress <br>";
    echo "E-mail：$newEmail <br>";
    echo "送貨日期為：$mouth 月 $date 日<br>";
    echo "送貨方式為：$delivery<br>";
    echo "回饋意見為：<br>$opinion";


    ?>
</body>
</html>