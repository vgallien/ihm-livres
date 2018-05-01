<!DOCTYPE html>
<html>
    <?php include "head.php"; ?>

    <body>
        <?php include "header.php"; ?>
        <section class="illustration">
            <div class="illustration-search">
                <form action="recherche.php">
                    <input type="search" placeholder="Rechercher un livre" /><!--
                    --><input type="submit" value="Chercher" />
                </form>
            </div>
        </section>
        <section class="avantages">
            <div class="container">
                <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="avantage">
                    <div class="avantage-img">
                        <img src="images/placeholder.png" alt="" title="" />
                    </div>
                    <div class="avantage-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </section>
        <?php include "footer.php"; ?>
    </body>
</html>
