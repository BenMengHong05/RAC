<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects</title>
</head>
<body>

<?php
/*class Fruit{
    public $name;
    public $you;
    
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_you($you){
        $this->you=$you;
    }
    function get_you(){
        return $this->you;
    }
}
$menghong = new Fruit();
$hong = new Fruit();
$menghong->set_name("MENGHONG");
$hong->set_you("ot dg");




echo $menghong->get_name();
echo "<br>";
echo $hong->get_you();
*/



class Fruit{
    public $name;
    function set_name($name){
        $this->name = $name;
    }
}
$menghong = new Fruit();
$menghong->set_name("hong");
echo $menghong->name;

?>
    
</body>
</html>