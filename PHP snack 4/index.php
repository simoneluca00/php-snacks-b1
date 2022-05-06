<?php

/* 
    ## Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.      
*/

$newArray = [];
$i = count($newArray);

$min = 1;
$max = 50;
$maxLength = 15;

$numeriEstratti = [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snacks blocco 1 (snack 4)</title>

    <style>
        div {
            text-align: center;
            margin: 30px 0;
        }

        span {
            margin: 0 20px;
        }
    </style>
</head>

<body>

    <div>
        <?php 
            //condizione per far avviare il ciclo while (la differenza tra il max e min di $numeroRandom deve essere maggiore o uguale alla lunghezza massima dell'array) 
            if (($max - $min) >= $maxLength) {

                while (count($newArray) < $maxLength) { 
                    $randomNumber = rand($min, $max); 
        ?>
                    <span>
                        <?php 
                            echo $randomNumber; 
                            $numeriEstratti[] = $randomNumber;
                        ?>
                    </span>
                    <?php
                        if (!in_array($randomNumber, $newArray)) {
                
                            $newArray[] = $randomNumber;
                        }
                            
                        $i++;
                }   ?>
      <?php } ?>

        <div>
            <h2>
                Sono stati estratti <?php echo count($numeriEstratti); ?> numeri
            </h2>
        </div>

        <div>
            <?php var_dump($newArray); ?>
        </div>

    </div>

</body>

</html>