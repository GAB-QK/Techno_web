 <!DOCTYPE html>
 < lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <?php
        $languages = array("HTML","CSS","PHP","JS","etc");
        $taille = sizeof($languages);
        echo "voici vos $taille langages informariques préférés : ";
        foreach($languages as $language){
            echo $language ."  ";
        }
        echo "<br>";
        echo "parmis ces languages le $languages[2] est votre favoris";
        $frameworks = array(
            "HTTP" => "wordPress",
            "CSS" => "Symfony",
            "PHP" => "JavaScript",
            "HTTP" => "wordPress",
        );
        echo "<br>";
        foreach($frameworks as $framework => $langue ){
            echo "le framework {$framework} est ecrit en {$langue}";
            echo "<br>";
        }
     ?>
 </body>
 
