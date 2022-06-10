<?php

session_start();

include_once('variables.php');

$email = strip_tags($_POST['email']); 
$password = strip_tags($_POST['mdp']);

if ( !isset($email) || !isset($password )) {
    $_SESSION['erreur'] = true;
    header('Location: /login.php');
}

function getUser($accounts, $email){
    $accounts;
    foreach ($accounts as $account) {
        if ($account['e_mail'] === $email) {
            return $account;
        }
    }
    return false;
} 

$getUser = getUser($accounts, $email);

if (!$getUser) {
    $_SESSION['erreurEmail'] = true;
    header('Location: /login.php');
}
else if (password_verify($password, $getUser['password'])) {
    $loggedUser = [
        'email' => $getUser['e_mail'],
        'prenom' => $getUser['prenom'],
        'nom' => $getUser['nom'],
        'pseudo' => $getUser['username'],
        'user_id' => $getUser['user_id']
    ];

    header('Location: /index.php');

    $_SESSION['loggedUser'] = $loggedUser;
}
else{
    $_SESSION['erreurMdp'] = true;
    header('Location: /login.php');
}