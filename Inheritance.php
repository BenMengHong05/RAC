<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
    class Fruit{
        public $me;
        public $you;

        public function __construct($me,$you){
            $this->me = $me;
            $this->you = $you;
        }
        public function intro(){
            echo "{$this->me} I LOVE {$this->you}";
        }
    }
        
        class MengHong extends Fruit{
            public function iloveyou(){
                echo "hello I'm MengHong in My chanel youtube MengHong001";
            }
        }

        $MengHong = new MengHong("MengHong","ot dg");
        $MengHong->iloveyou();
        echo "<br>";
        $MengHong->intro();
    ?>
    
</body>
</html>