<?php include_once('header.php'); ?>
        <article class="partenaire full">
            <img src="./assets/img/DSAFrance.png" alt="DSAFrance">
            <h2>
                Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales. <br>
                <br>
                Nous accompagnons les entreprises dans les étapes clés de leur évolution. <br>
                <br>
                Notre philosophie : s’adapter à chaque entreprise. 
                Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises
            </h2>
        </article>
        <section class="comment">
            <h2>Commentaires :</h2>
            <div class="comment_flex">
                <article class="comment_content">
                    <p>Prénom</p>
                    <p>Date</p>
                    <p>Commentaires</p>
                </article>
            </div>
            <form action="" method="POST" class="comment_form">
                <label for="commentaire" hidden></label>
                <input type="text" name="commentaire" id="commentaire" placeholder="Entrez votre commentaire" required>
                <button type="submit">Envoyer</button>
            </form>
        </section>
<?php include_once('footer.php'); ?>