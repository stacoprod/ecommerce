<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include ('head.php'); ?>
    <link href="public/css/probike.css" rel="stylesheet">

</head>
<body>

<div id="header">
    <?php include ('navbar.php'); ?>
</div>

<div class="contenu" id="contenu_dendo">
    <h1 class="titre_page">Probike</h1>

    <div id="presentation">
        <div id="texte_presentation">
            <p>Chez Probike, nous voulons offrir ce qu'il y a de mieux en terme de vélo. Nous y embarquons des équipements professionnels de pointe et adaptés à toutes les utilisations: route, ville, montagne et champs.<br>

                <br>Que vous soyez sportif ou amateur, que vous ayez décidé d'en faire un loisir ou un mode de déplacement quotidien, nous avons 20 ans d'expertise dans le domaine pour vous proposer une solution sur mesure, et un plaisir en toute liberté.<br>

                <br>Probike est la solution qu'il vous faut, que vous souhaitiez vous offrir des balades en famille en VTT, que vous décidiez de parcourir un pays d'un bout à l'autre, ou encore si vous souhaitez vous rendre au travail quotidiennement sans vous salir. Nous nous adapterons à toutes les situations, toujours dans l'esprit légendaire ProBike</p>
        </div>
        <div class="presentation">
            <img class="img_probike" src="public/images/accueil/accueil_3.jpg" alt="accueil_3">
            <img class="img_probike"src="public/images/accueil/accueil_5.jpg" alt="accueil_5">
        </div>
    </div>

    <div id="presentation">
        <div id="texte_presentation">
            <p>Le design, la qualité et le confort sont au cœur de Probike. Sans compromis! Minimaliste, pur, sobre et sportif font le style Probike. Nos vélos sont designés en France et assemblés-main et sur commande dans notre atelier. <br>

                <br>Une recherche de l’épure qui fait le style Probike: des partis-pris sobres, un branding réduit à l’essentiel, pour des vélos aussi élégants que minimalistes. C’est notre expérience dans le sport deux-roues qui nous a inspiré la recherche d’essentiel, de performance, de légèreté, de maniabilité.<br>
                <br>Nos mécaniciens assemblent entièrement votre Probike dans notre atelier de Haguenau lorsque nous recevons votre commande. Chaque filetage est graissé, chaque boulon serré. Une fois assemblé, chaque Probike est "human-tested" avant d'être emballé et expédié.</p>
        </div>
        <img src="public/images/accueil/accueil_4.jpg" alt="accueil_4">
    </div>
</div>

<?php include ('footer.php'); ?>

</body>
</html>