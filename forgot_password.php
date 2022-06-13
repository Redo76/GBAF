<?php include_once('header.php'); ?>

<?php if (isset($_SESSION['erreur'])) : ?>
    <div class="alert alert-danger" role="alert">
            Entrez des données valides !
    </div>
    <?php unset($_SESSION['erreur']); ?>
<?php endif ?>

<form method="POST" action="login_POST.php" class="container mt-5">
    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo</label>
        <input type="text" class="form-control" name="pseudo" id="pseudo">

        <?php if (isset($_SESSION['erreurEmail'])) : ?>
            <div class="alert alert-danger" role="alert">
                Pseudo Incorrect !
            </div>
            <?php unset($_SESSION['erreurEmail']); ?>
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
            
            <?php if (isset($_SESSION['wrongAnswer'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        Réponse incorrecte !
                    </div>
                    <?php unset($_SESSION['wrongAnswer']); ?>
            <?php endif ?>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php include_once('footer.php'); ?>