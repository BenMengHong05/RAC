<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract</title>
</head>
<body>
    


<?php

/*abstract class lambo{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro():string;
}

class Menghong extends lambo {
    public function intro() :string {
        return "hello wellcome in Website $this->name!";
    }
}


class HongKim extends lambo {
    public function intro() :string {
        return "hello Wellcome in channe youtube $this->name!";
    }
}


class sokliseng extends lambo {
    public function intro() :string{
        return "hello Wellcome in car $this->name";
    }
}
    


$MengHong = new MengHong("MengHongBen");
echo $MengHong->intro();
echo "<br>";


$HongKim = new HongKim("HongKim");
echo $HongKim->intro();
echo "<br>";

$sokliseng = new sokliseng("sokliseng");
echo $sokliseng->intro();
echo "<br>";
*/



abstract class menghong{
    abstract protected function prefixName($name);
}


class MengHongName extends menghong{
    public function prefixName($name){
        if ($name == "BenMengHong"){
            $prefix = "Mr.";
        }
        elseif($name == "benmenghong"){
            $prefix = "Mrs.";
        }
        else{
            $prefix = "";
        }
        return "{$prefix} {$name}";
        
    }

}


$class = new MengHongName;
echo $class->prefixName("BenMengHong");
echo "<br>";
echo $class->prefixName("benmenghong");







  ?>
  
   













    
</body>
</html>