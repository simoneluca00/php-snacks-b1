<?php
/* 

## Snack 2

    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$userName = (isset($_GET['name'])) ? $_GET['name'] : '';
$userMail = (isset($_GET['mail'])) ? $_GET['mail'] : '';
$userAge = (isset($_GET['age'])) ? $_GET['age'] : '';

/* 

    if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
        echo "Compila tutti i campi:";
    } else if (is_numeric($userAge)  && strlen($userName) > 3  && strpos($userMail, '@') && strpos($userMail, '.')) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }

*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snacks blocco 1</title>

    <style>
        form {
            width: 10%;
            margin: 0 auto;
        }

        label,
        input {
            display: block;
        }

        input {
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

    </style>
</head>
<body>

        <?php if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) { ?>
            <h2>
                <strong>
                    <?php echo "Compila tutti i campi:"; ?>
                </strong>
            </h2>
        <?php } else if (is_numeric($userAge)  && strlen($userName) > 3  && strpos($userMail, '@') && strpos($userMail, '.')) { ?>
            <h2 style="color: green;">
                <?php echo "Accesso riuscito"; ?>
            </h2>
        <?php } else { ?>
            <h2 style="color: red;">
                <?php echo "Accesso negato"; ?>
            </h2>
        <?php } ?>

    <form method="get">
        <label for="name">Nome:</label>
        <input type="text" name="name" placeholder="Inserisci il tuo nome">

        <label for="mail">Mail:</label>
        <input type="text" name="mail" placeholder="Inserisci la tua mail">

        <label for="age">Età:</label>
        <input type="text" name="age" placeholder="Inserisci la tua età">

        <button type="submit">Invia</button>
    </form>

    <div>
        <?php ?>

    </div>
    
</body>
</html>