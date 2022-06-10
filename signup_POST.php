<?php

include_once('header.php');

//Récuperation des inputs du formulaire
$prenom = strip_tags($_POST['prenom']);
$nom = strip_tags($_POST['nom']);
$password = strip_tags($_POST['mdp']);
$confirmPassword = strip_tags($_POST['mdpconf']);
$email = strip_tags($_POST['email']);
$pseudo = strip_tags($_POST['pseudo']);

// On stocke les variables en session pour pouvoir les réafficher lorsqu'il y a une erreur dans le formulaire
$_SESSION['signupEmail'] = $email;
$_SESSION['signupPrenom'] = $prenom;
$_SESSION['signupNom'] = $nom;
$_SESSION['signupPseudo'] = $pseudo;

// Création d'une fonction qui retourne VRAI lorsque l'email que l'on rentre dans le formulaire est le même que dans la base de données
function alreadyEmail($db, $email){
    $e_mailBDD = $db -> prepare('SELECT e_mail FROM accounts');
    $e_mailBDD -> execute();
    $emailsUser = $e_mailBDD -> fetchAll();
    foreach ($emailsUser as $emailUser) {
        if ($emailUser['e_mail'] === $email) {
            return true;
        }
    }
    return false;
} 

// Création d'une fonction qui retourne VRAI lorsque l'email que l'on rentre dans le formulaire est le même que dans la base de données
function alreadyPseudo($db, $pseudo){
    $pseudoBDD = $db -> prepare('SELECT username FROM accounts');
    $pseudoBDD -> execute();
    $pseudoUser = $pseudoBDD -> fetchAll();
    foreach ($pseudoUser as $pseudoUser) {
        if ($pseudoUser['username'] === $pseudo) {
            return true;
        }
    }
    return false;
} 


$regexMdp = preg_match('%^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$%', $password);


if ( 
    !isset($prenom) || !isset($nom) || !isset($password ) 
    || !isset($confirmPassword) || !isset($pseudo) || !isset($email) 
    )
{
    $_SESSION['erreur'];
    header('Location: /signup.php');
}

else if ($regexMdp === 0) {
    $_SESSION['erreurMdp'] = true;
    header('Location: /signup.php');
}

else if ($password != $confirmPassword ) {
    $_SESSION['confirmPassword'] = true;
    header('Location: /signup.php');
}

else if ($prenom === '' || $nom === '' || $password === '' || $confirmPassword === '' || $email === '') {
    $_SESSION['erreurChamp'];
    header('Location: /signup.php');
}

else {
    if (alreadyEmail($db, $email)) {
        $_SESSION['emailAlreadyExist'] = true;
        header('Location: /signup.php');
        return;
    }
    if (alreadyPseudo($db, $pseudo)) {
        $_SESSION['pseudoAlreadyExist'] = true;
        header('Location: /signup.php');
        return;
    }
    
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sqlInscription = 'INSERT INTO accounts(e_mail, prenom, nom, username, password) VALUES (:e_mail, :prenom, :nom, :username, :password)';
    $ajoutUser = $db -> prepare($sqlInscription);
    $ajoutUser -> execute([
        'e_mail' => $email,
        'prenom' => $prenom,
        'nom' => $nom,
        'password' => $passwordHash,
        'username' => $pseudo
    ]);
    
    $_SESSION['signup'] = true;
}
?>

<?php if (isset($_SESSION['signup'])) : ?>
        <div class="alert alert-success" role="alert">
            Vous vous êtes inscrits !
        </div>
        <?php unset($_SESSION['signup']); ?>
<?php endif ?>

<?php include_once('footer.php'); ?>