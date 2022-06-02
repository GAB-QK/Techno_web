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
        $fruits = array("mango","lemon","blueberry");
        foreach($fruits as $fruit){
            echo "{$fruit} <br>";
        }
        
        $ingredients = array("eggs", "milk", "butter");
        echo $ingredients[1];
        echo "<br>";
        $objects = array("pen","book","lamp");
        array_unshift($objects , "chair");
        unset($objects[2]);
        $objects[] = "laptop";
        foreach($objects as $object){
            echo"{$object}";
        }
        $numbers = array(4,10,8,12,6);
        rsort($numbers);
        echo"<br>";
        foreach($numbers as $number){
            echo"{$number}";
        }
        
    ?>

</body>
</html>