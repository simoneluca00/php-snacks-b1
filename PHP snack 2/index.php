<?php
/* 

## Snack 2

    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$userName = (isset($_GET['name'])) ? $_GET['name'] : '';
$userMail = (isset($_GET['mail'])) ? $_GET['mail'] : '';
$userAge = (isset($_GET['age'])) ? (int)$_GET['age'] : '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snacks blocco 1 (snack 2) </title>

    <style>
        div.container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form {
            width: 40%;
        }

        form p {
            font-size: 0.9em;
            color: red;
            margin: 0;
        }

        label,
        button {
            margin-top: 20px;
        }

        label,
        input {
            display: block;
            width: 98%;
        }

        button {
            text-align: center;
            width: 100%;
            height: 40px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            width: 100%;
        }

    </style>
</head>
<body>
    <div class="container">
        
    <!-- NOTE se uno dei tre input è vuoto stampare: "compila tutti i campi" -->
        <?php if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) { ?>
            <h2>
                <strong>
                    <?php echo "Compila tutti i campi:"; ?>
                </strong>
            </h2>
            
    <!-- NOTE se sono soddisfatte tutte le condizioni stampare: "accesso garantito" -->
        <?php } else if (is_numeric($userAge)  && strlen($userName) > 3  && strpos($userMail, '@') && strpos($userMail, '.')) { ?>
            <h2 style="color: green;">
                <?php echo "Accesso riuscito"; ?>
            </h2>
        <?php } else { ?>

    <!-- NOTE se almeno una condizione non è soddisfatta stampare "accesso negato" -->
            <h2 style="color: red;">
                <?php echo "Accesso negato"; ?>
            </h2>
        <?php } ?>

        <form method="get">
            <label for="name">Nome:</label>
            <input type="text" name="name" placeholder="Inserisci il tuo nome">

            <!-- NOTE condizione per stampare a schermo l'errore fatto dall'utente (NOME) -->
            <?php if (!empty($_GET['name']) && strlen($userName) < 3) { ?>
                <p>Min. 3 caratteri</p>
            <?php } ?>


            <label for="mail">Mail:</label>
            <input type="text" name="mail" placeholder="Inserisci la tua mail">

            <!-- NOTE condizione per stampare a schermo l'errore fatto dall'utente (MAIL DOT) -->
            <?php if (!empty($_GET['mail'])) { 
                if (strpos($userMail, '.') == 0 || strpos($userMail, '@') == 0) {
            ?>
            <p>La mail deve contenere il "." (dot) e la "@" (at sign)</p>

            <?php  
                }
            }  
            ?>


            <label for="age">Età:</label>
            <input type="number" name="age" min="1" placeholder="Inserisci la tua età">

            <!-- NOTE condizione per stampare a schermo l'errore fatto dall'utente (ETA') -->
            <?php if (!empty($_GET['age']) && !is_numeric($userAge)) { ?>
                <p>Inserisci un numero</p>
            <?php } ?>

            <button type="submit">Invia</button>
        </form>

    </div>
    
</body>
</html>