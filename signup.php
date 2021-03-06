<?php
include_once('header.php');

$actualMail = '';
if (isset($_SESSION['signupEmail'])) {
    $actualMail = $_SESSION['signupEmail'] ;
    unset($_SESSION['signupEmail']);
}

?>

    <?php if (isset($_SESSION['erreur'])) : ?>
        <div class="alert alert-danger" role="alert">
                Entrez des données valides !
        </div>
        <?php unset($_SESSION['erreur']); ?>
    <?php endif ?>


    <form method="POST" action="signup_POST.php" class="container mt-5">
    <h2>Formulaire d'inscription</h2>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" required class="form-control" name="prenom" id="prenom" value="<?= isset($_SESSION['signupPrenom']) ? $_SESSION['signupPrenom'] : '' ?>">
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" required class="form-control" name="nom" id="nom" value="<?= isset($_SESSION['signupNom']) ? $_SESSION['signupNom'] : '' ?>">
    </div>
    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo</label>
        <input type="text" required class="form-control" name="pseudo" id="pseudo" value="<?= isset($_SESSION['signupPseudo']) ? $_SESSION['signupPseudo'] : '' ?>">
        
            <?php if (isset($_SESSION['pseudoAlreadyExist'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        Ce pseudo existe déja !
                    </div>
                    <?php unset($_SESSION['pseudoAlreadyExist']); ?>
            <?php endif ?>
    </div>
    <div class="mb-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" required class="form-control" name="mdp" id="mdp">
            
            <?php if (isset($_SESSION['erreurMdp'])) : ?>
                <div class="alert alert-danger" role="alert">
                    Ce mot de passe doit contenir au moins avoir 8 caractères minimum, une lettre majuscule, une lettre minuscule et un chiffre
            </div>
            <?php unset($_SESSION['erreurMdp']); ?>
            <?php endif ?>
            
    </div>
    <div class="mb-3">
            <label for="mdpconf" class="form-label">Confirmation mot de passe</label>
            <input type="password" required class="form-control" name="mdpconf" id="mdpconf">
            
            <!-- Si la variable de session 'confirmPassword' existe, on affiche un message d'erreur  -->
            <?php if (isset($_SESSION['confirmPassword'])) : ?>
                <div class="alert alert-danger" role="alert">
                    Les mots de passe ne correspondent pas !
                </div>
                <?php unset($_SESSION['confirmPassword']); ?>
            <?php endif ?>
    </div>
    <div class="mb-3 d-flex flex-column">
        <label for="question">Question secrète</label>
        <select name="question" id="question">
            <option value="ville">Votre lieu de naissance</option>
            <option value="secondPrenom">Votre second prénom</option>
            <option value="couleur">Votre couleur préféré</option>
            <option value="animal">Votre animal préféré</option>
        </select>
    </div>
    <div class="mb-3">
            <label for="reponse" class="form-label">Réponse</label>
            <input type="text" class="form-control" name="reponse" id="reponse">  
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
            
<?php include_once('footer.php'); ?>