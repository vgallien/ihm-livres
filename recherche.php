<!DOCTYPE html>
<html>
    <?php include "head.php"; ?>

    <body>
        <?php include "header.php"; ?>

        <?php include "searchBar.php"; ?>
    <div class="container">
        <div class="filtres">
            <form>
                <select>
                    <option>-- Localisation --</option>
                    <option>Normandie</option>
                    <option>Bretagne</option>
                </select>
                <select>
                    <option>-- Mode de livraison --</option>
                    <option>En main propre</option>
                    <option>Colissimo</option>
                </select>
                <select>
                    <option>-- Trier par --</option>
                    <option>Localisation</option>
                    <option>Prix</option>
                </select>
                <div>
                    Afficher uniquement
                    <input type="checkbox" /><label>Location</label>
                    <input type="checkbox" /><label>Vente</label>
                    <input type="checkbox" /><label>Echange</label>
                </div>
            </form>
        </div><!--
        --><div class="resultats">
            <div class="livre preview">
                <div class="livre-image">
                    <img src="https://picsum.photos/100/150/?random" alt="Livre" title="Livre" />
                </div>
                <div class="livre-description">
                    <h1>Titre du livre recherché</h1>
                    <p>Description du livre</p>
                </div>
            </div>
            <div class="resultats-liste">
                <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="resultat">
                    <a class="btn-details" href="details.php" title="Voir l'offre">Détails</a>
                    <p>Pseudo (note)</p>
                    <p>Localité - Mode de livraison</p>
                    <p>Description de l'offre</p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
        <?php include "footer.php"; ?>
    </body>
</html>
