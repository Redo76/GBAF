<?php 

session_start();

changecinclude_once('variables.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>GBAF</title>
</head>
<body>
    <header>
        <a href="./index.html"><img src="./assets/img/gbaf.png" alt="Logo du GBAF"></a>
        <nav>
            <?php if (isset($_SESSION['loggedUser'])) : ?> 
                <p>Nom & Prénom</p>
                <ul>
                    <li>
                        <a href="./logout.php" class="button-13">Déconnexion</a>
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