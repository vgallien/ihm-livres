<!DOCTYPE html>
<html>
    <?php include "head.php"; ?>

    <body>
        <?php include "header.php"; ?>
        <?php include "searchBar.php"; ?>


        <a href="recherche.php" title="Retour aux résultats">Retour aux résultats</a>
        <section class="livre-infos">
            <div class="container">
                <h1>Titre du livre</h1>
                <div class="livre-image">
                    <img src="https://picsum.photos/100/150/?random" alt="Livre" title="Livre" />
                </div>
                <div class="livre-description">
                    <p>Description du livre</p>
                    <p>Auteur</p>
                    <p>Année de parution</p>
                    <p>Genre</p>
                    <p>Nombre de pages</p>
                </div>
            </div>
        </section>
        <section class="avis">
            <div class="container">
                <h2>Avis</h2>
                <p>Pseudo</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </section>
        <section class="annonces">
            <div class="container">
                <h2>Annonces</h2>
                <div class="resultat">
                    <a class="btn-details" href="details.php" title="Voir l'offre">Détails</a>
                    <p>Pseudo (note)</p>
                    <p>Localité - Mode de livraison</p>
                    <p>Description de l'offre</p>
                </div>
            </div>
        </section>
        <?php include "footer.php"; ?>
    </body>
</html>
