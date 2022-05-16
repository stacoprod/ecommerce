<?php
if (isset($_POST['deconnexion'])){
    session_destroy();
    header("Refresh:0");
}
?>
<div class="banner">
    <img id="icone_probike" alt="icone_probike" src="public/images/logo.png" onclick="location='index.php'">
</div>
<div><img id="icone_menu" onclick="afficher_navbar()" src="public/images/icone_menu.png" alt="menu"></div>
<div class="navbar" id="navbar">
    <a class="navbar_link" href="index.php">Accueil</a>
    <a class="navbar_link" href="produits.php">Produits</a>
    <a class="navbar_link" href="probike.php">A propos</a>
    <a class="navbar_link" href="contact.php">Contact</a>
    <?php
    if (isset($_SESSION['identifiant'])){
    ?>
    <a class="navbar_link" href="moncompte.php">Mon compte</a>
    <?php
    }
    if (!isset($_SESSION['identifiant'])){
        ?>
    <a class="navbar_link" href="connexion.php">Se connecter</a>
    <?php
    }
    if (isset($_SESSION['identifiant'])){
        ?>
        <a class="navbar_link" href="deconnexion.php">Deconnexion</a>
    <?php
    }
    ?>

</div>
<div id="div_panier" onclick="location.href = 'panier.php'">
    <?php if(isset($_SESSION['identifiant'])) {
        require_once ('Model/connexion_panier_navbar.php');
        ?><img src="public/images/icone_panier.png" id="icone_panier"><?php
        if($qte_panier != null) {
            ?><span><p id="quantite_panier"><?php echo($qte_panier) ?></p></span><?php
        }
    }
    ?>
</div>
