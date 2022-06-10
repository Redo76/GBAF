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
    <div class="mb-3">
        <label for="mdp" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="mdp" id="mdp">

        <?php if (isset($_SESSION['erreurMdp'])) : ?>
            <div class="alert alert-danger" role="alert">
                Mot de passe Incorrect !
            </div>
            <?php unset($_SESSION['erreurMdp']); ?>
        <?php endif ?>
    </div>


    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php include_once('footer.php'); ?>