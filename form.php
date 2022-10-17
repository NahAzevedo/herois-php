<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    
<div id="images">
<?php
    $universo = $_POST["universo"];
    $heroi = $_POST["heroi"];

    if($universo=="Marvel"){      
         if($heroi == "HULK"){           
            echo "<img src='imgs/hulk.jpg'>";
         }   
         else if($heroi == "LOKI"){           
            echo "<img src='imgs/loki.jpg'>";
         }
         else if($heroi == "THOR"){           
            echo "<img src='imgs/thor.jpg'>";
         }
         else if($heroi == "GAMORA"){           
            echo "<img src='imgs/gamora.jpg'>";
         }
         else {
            echo "Herói invalido";
         }    
            
           
    } else if ($universo== "DC"){
        if($heroi == "ROBIN"){
            echo "<img src='imgs/robin.jpg'>";
        }   
        else if($heroi == "MUTANO"){
            echo "<img src='imgs/mutano.jpg'>";
        }
        else if($heroi == "FLASH"){
            echo "<img src='imgs/flash.jpg'>";
        }
        else if($heroi == "WOLVERINE"){
            echo "<img src='imgs/wolverine.jpg'>";
        }
        else {
            echo "Herói inválido";
        } 

    } else{
        echo "Universo inválido";
    }


    ?>
    </div>
    </body>
</html>