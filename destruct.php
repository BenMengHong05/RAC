<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destruct</title>
</head>
<body>
    <?php
    class Fruit{
        public $car;
        public $name;
        public $price;

        function __construct($car,$name,$price){
            $this->car = $car;
            $this->name = $name;
            $this->price =$price;
        }
        function __destruct(){
            echo "I have a {$this->car} Name car {$this->name} pricecar{$this->price}";
        }
    }


    $menghong = new Fruit("lambo","MengHong","1000000$");


    
    
    
    
    
    ?>
    
</body>
</html>