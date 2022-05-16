<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ('head.php'); ?>
    <link href="public/css/accueil.css" rel="stylesheet">

</head>
<div>

<div id="header">
    <?php include ('navbar.php'); ?>
</div>
<div class="contenu">
    <h1 class="titre_page">Probike</h1>
    <div class="presentation">
    <div id="texte_presentation">
        <p>Chez Probike, nous voulons offrir ce qu'il y a de mieux en terme de vélo. Nous y embarquons des équipements professionnels de pointe et adaptés à toutes les utilisations: route, ville, montagne et champs.<br>

            <br>Que vous soyez sportif ou amateur, que vous ayez décidé d'en faire un loisir ou un mode de déplacement quotidien, nous avons 20 ans d'expertise dans le domaine pour vous proposer une solution sur mesure, et un plaisir en toute liberté.<br>

            <br>Probike est la solution qu'il vous faut, que vous souhaitiez vous offrir des balades en famille en VTT, que vous décidiez de parcourir un pays d'un bout à l'autre, ou encore si vous souhaitez vous rendre au travail quotidiennement sans vous salir. Nous nous adapterons à toutes les situations, toujours dans l'esprit légendaire ProBike</p>
        <a href="probike.php" class="bouton">En savoir plus</a>
    </div>
    <div>
            <img class="img_home" src="public/images/accueil/accueil_1.jpg" alt="accueil_1">
    </div>
    </div>
<!-- Une section qui affiche les éléments choisis en base de donnée qui ont pour valeur 1 dans le champ accueil-->
    <?php include ('Model/connexion_articles_accueil.php');

    if(isset($produits_accueil)) { ?>

    <h1 class="titre_page">Produits</h1>
        <div id="articles_accueil">
        <?php for($i=0; $i<count($produits_accueil); $i++) {
            if($produits_accueil[$i]['accueil'] == 1) {
               ?>
                <div class="article_accueil">
                    <div class="article_container">
                        <img class="image" src="public/images/produits/<?php echo($produits_accueil[$i]['image']) ?>.png" alt="produit_accueil_1">
                        <h3><?php echo($produits_accueil[$i]['nom_produit']) ?></h3>
                        <?php if($produits_accueil[$i]['reduction_produit'] != 0) {
                            ?><h4><?php echo($produits_accueil[$i]['prix']  * (1 - ($produits_accueil[$i]['reduction_produit'] / 100) )) ?> € <s><?php echo($produits_accueil[$i]['prix']) ?> €</s></h4><?php
                        }
                        else {
                            ?><h4><?php echo($produits_accueil[$i]['prix']) ?> €</h4><?php
                        }
                        ?>
                        <p><?php echo($produits_accueil[$i]['designation']) ?></p>
                    </div>
                    <a class="bouton_produit_accueil" href="produit.php?id_produit=<?php echo($produits_accueil[$i]['id_produit']) ?>">Détails</a>
                </div>
            <?php
            }
        } ?>
        </div>
   <?php } ?>



    <div id="icones_accueil">
        <div class="icones_accueil_liste">
            <div class="une_icone">
                <a href="produits.php"><span class="iconify" data-icon="gis:bicycle"></span> Des vélos de qualité artisanale</a>
            </div>
            <div class="une_icone">
                <a href="probike.php"><span class="iconify" data-icon="ri:tools-fill"></span> Un atelier de réparation dernier cri</a>
            </div>
            <div class="une_icone">
                <a href="contact.php"><span class="iconify" data-icon="bi:headset"></span> Un problème ? Contactez nous !</a>
            </div>
        </div>

        <div class="icones_accueil_liste">
            <div class="une_icone">
                <a href="probike.php"><span class="iconify" data-icon="bx:leaf"></span> Une démarche écologique</a>
            </div>
            <div class="une_icone">
                <a href="produits.php"><span class="iconify" data-icon="gis:measure"></span> Des vélos sur mesure</a>
            </div>
            <div class="une_icone">
                <a href="probike.php"><span class="iconify" data-icon="eos-icons:performance"></span> Optimisés pour les performances!</a>
            </div>
        </div>
    </div>
    <!-- Une section promotion qui affiche les articles dès 20% de réduction-->
    <?php include ('Model/connexion_articles_promo.php');
    if(isset($reduction_produit)) { ?>
        <h1 class="titre_page">Offres promotionnelles du moment:</h1>
        <div id="articles_accueil">
            <?php for($i=0; $i<4; $i++) {
                if($reduction_produit[$i]['reduction_produit'] >= 20) {
                    ?>
                    <div class="article_accueil">
                        <div class="article_container">
                            <img class="image" src="public/images/produits/<?php echo($reduction_produit[$i]['image']) ?>.png" alt="produit_accueil_1">
                            <h3><?php echo($reduction_produit[$i]['nom_produit']) ?></h3>
                            <?php if($reduction_produit[$i]['reduction_produit'] != 0) {
                                ?><h4><?php echo($reduction_produit[$i]['prix']  * (1 - ($reduction_produit[$i]['reduction_produit'] / 100) )) ?> € <s><?php echo($reduction_produit[$i]['prix']) ?> €</s></h4><?php
                            }
                            else {
                                ?><h4><?php echo($reduction_produit[$i]['prix']) ?> €</h4><?php
                            }
                            ?>
                            <p><?php echo($reduction_produit[$i]['designation']) ?></p>
                        </div>
                        <a class="bouton_produit_accueil" href="produit.php?id_produit=<?php echo($reduction_produit[$i]['id_produit']) ?>">Détails</a>
                    </div>
                    <?php
                }
            } ?>
        </div>
    <?php }?>
</div>
<?php include ('footer.php'); ?>


<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</body>

</html>
