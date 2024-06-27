<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $color =  array("black","blue","Yellow","Red");
    foreach($color as $m){
        echo " $m <br>";
    }
    echo "<hr>";
    $menghong =array("menghong","hello w","007","=====");
    foreach($menghong as $b){
        echo "$b <br>";
    }
    echo "<br>";
    $remember = array("Lambo"=>"10000$","toyota"=>"20000$","BUGATI"=>"500000$");
    foreach ($remember as $c => $v){
        echo "$c : $v <br>";
    }
    echo "<br>";
    echo "<hr>";
    class car{
        public $name;
        public $car;
       public function __construct($name,$car){
            $this->name=$name;
            $this->car=$car;
        }
    }
    $carforme = new car ("MengHong","BUGATI");
    foreach ($carforme as $x=>$n){
        echo "$x : $n <br>";
    }
    echo "<hr>";

    $your = array("BMH","LHK","SSP","HCR","YSP");
    foreach ($your as $y){
        if($y == "HCR") continue;
            echo "$y <br>";
    }
    
    echo "<hr>";

    $your = array("BMH","LHK","SSP","HCR","YSP");
    foreach ($your as $y){
        if($y == "HCR") break;
            echo "$y <br>";
    }
    echo "<hr>";
    $me = array ("Your","Love ","Me");

    foreach ($me as $x){
        if($x == "Love");
        echo "$x ";
    }

    echo "<hr>";
    ?>
    
</body>
</html>