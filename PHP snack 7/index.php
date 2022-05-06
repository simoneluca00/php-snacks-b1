<?php

/* 
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.     
*/

$students = [
    [
        "nome" => "Simone Luca",
        "cognome" => "Zaino",
        "voti" => [10, 5, 7, 2, 4, 8]
    ],
    [
        "nome" => "Gerardo",
        "cognome" => "Verdi",
        "voti" => [4, 6, 8, 10, 5, 8]
    ],
    [
        "nome" => "Mario",
        "cognome" => "Rossi",
        "voti" => [7, 4, 2, 5, 9, 3]
    ],
    [
        "nome" => "Giovanna",
        "cognome" => "Crispo",
        "voti" => [10, 8, 9, 10, 7, 7]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snacks blocco 1 (snack 7)</title>

    <style>
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <?php             
            for ($i=0; $i < count($students) ; $i++) { 

                $singleArrayVoti = $students[$i]["voti"];
                $studentName = $students[$i]["nome"];
                $studentSurname = $students[$i]["cognome"];
            
            
                $sommaVotiAlunno = array_sum($singleArrayVoti);
                
                // $sommaVotiAlunno /= count($singleArrayVoti); --> forma abbreviata 
                $mediaVotiAlunno = $sommaVotiAlunno / count($singleArrayVoti);
                $roundMedia = round($mediaVotiAlunno, 1);
        ?>

                <p>
                    <?php 
                        echo "L'alunno/a ".  $studentName . " " . $studentSurname . " ha una media voti di: " . $roundMedia;
                    ?>
               </p>
        <?php
            }
            var_dump($students);
        ?>

    </div>
</body>
</html>