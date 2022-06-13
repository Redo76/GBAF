<?php include_once('header.php'); ?>
    <aside>
        <h1>Le Groupement Banque Assurance Français (GBAF) est une fédération <br>
            représentant les 6 grands groupes français :</h1>
        <ul>
            <li>BNP Paribas ;</li>
            <li>BPCE ;</li>
            <li>Crédit Agricole ;</li>
            <li>Crédit Mutuel-CIC ;</li>
            <li>Société Générale ;</li>
            <li>La Banque Postale.</li>
        </ul>
    </aside>
    <?php if(isset($_SESSION['loggedUser'])) : ?>
        <section>
            <h2>
                À l’échelle nationale, ces réseaux gèrent, dans un contexte de forte concurrence, plus de 80 % des  quelque 73 millions de comptes courants.
            </h2>
            <div class="partenaire_flex">
                <article class="partenaire miniature">
                    <img src="./assets/img/DSAFrance.png" alt="DSAFrance">
                    <div class="miniature_info">
                        <h3>
                            Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.
                            Nous accompagnons les entreprises dans les étapes clés de leur...
                        </h3>
                        <a href="./acteurDSA.php">Lire la suite</a>
                    </div>
                </article>
                <article class="partenaire miniature">
                    <img src="./assets/img/formation&co.png" alt="Formation&co">
                    <div class="miniature_info">
                        <h3>
                            Formation&co est une association française présente sur tout le territoire.
                            Nous proposons à des personnes issues de tout milieu de devenir entrepreneur...
                        </h3>
                        <a href="#">Lire la suite</a>
                    </div>
                </article>
                <article class="partenaire miniature">
                    <img src="./assets/img/protectpeople.png" alt="Protectpeople">
                    <div class="miniature_info">
                        <h3>
                            Protectpeople finance la solidarité nationale.
                            Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une...
                        </h3>
                        <a href="#">Lire la suite</a>
                    </div>
                </article>
                <article class="partenaire miniature">
                    <img src="./assets/img/CDE.png" alt="CDE">
                    <div class="miniature_info">
                        <h3>
                            Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.
                            Nous accompagnons les entreprises dans les étapes clés de leur évolution...
                        </h3>
                        <a href="#">Lire la suite</a>
                    </div>
                </article>
            </div>
        </section>
    <?php else : ?>
        <h2>Connnectez-vous pour afficher les acteurs :</h2>
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
            <div class=" d-flex flex-column">
                <button type="submit" class="btn btn-primary">Se connecter</button>
                <a href="./forgot_password.php" class="mt-3">Mot de passe oublié ?</a>
            </div>
        </form>
    <?php endif ?>
<?php include_once('footer.php'); ?>
