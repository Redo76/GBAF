<?php 

session_start();

include_once('variables.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GBAF</title>
</head>
<body>
    <header>
        <a href="./index.php"><img src="./assets/img/gbaf.png" alt="Logo du GBAF"></a>
        <nav>
            <?php if (isset($_SESSION['loggedUser'])) : ?> 
                <p>
                    <?= $_SESSION['loggedUser']['prenom']. ' ' .  $_SESSION['loggedUser']['nom']?>
                </p>
                <ul>
                    <li>
                        <a href="./logout.php" class="button-13 deco">Déconnexion</a>
                    </li>
                </ul>
            <?php else : ?> 
                    <ul>
                        <li>
                            <a href="./signup.php" class="button-13">S'inscrire</a>
                        </li>
                        <li>
                            <a href="./login.php" class="button-13">Connexion</a>
                        </li>
                    </ul>
            <?php endif ?>
        </nav>
    </header>
    <main>