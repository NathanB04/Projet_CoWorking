<div class="logo">
    <a href="index.php?page=home">
        <img src="./assets/img/coffice_logo_blanc.png" alt="logo Coffice"> 
    </a>
</div>

<header>
    <div class="navigation-desktop">
        <nav role="navigation">
            <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <?php
                if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
                    echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
                    echo "<li><a href=\"index.php?page=account\">Compte</a></li>";
                }
                else {
                    echo "<li><a href=\"index.php?page=login\">Connexion</a></li>";
                    echo "<li><a href=\"index.php?page=inscription\">Inscription</a></li>";
                }
            ?>
            <!-- <li><a href="index.php?page=login">Connexion</a></li> -->
            <li><a href="index.php?page=etablissement">Etablissement</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<body class="resultatsPage">

<nav>
    <div class="burger-button">
        <span class="burger-top"></span>
        <span class="burger-middle"></span>
        <span class="burger-bottom"></span>
    </div>
    <div class="burger-menu">
                <a href="index.php?page=home">Accueil</a>
                <a href="index.php?page=login">Connexion</a>
                <a href="index.php?page=inscription">Inscription</a>
                <a href="index.php?page=etablissement">Ajout d'un établissement</a>
                <a href="index.php?page=resultats">Liste des établissements</a>
                
    </div>
</nav>

<h1 class="TITLE-PAGE-ETABLISSEMENT-ADD"> AJOUT ETABLISSEMENT </h1>

<form action="index.php?page=ajoutEtablissement" method="post" enctype="multipart/form-data">
    <ul>
        <li><label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="<?php echo $nomEtablissement;?>"/></li>
        <li><label for="adresse">Adresse :</label><input type="text" id="adresse" name="adresse" value="<?php echo $adresse;?>"/></li>
        <li><label for="description">Description :</label><textarea id="description" name="description"  value="<?php echo $description;?>"></textarea></li>
        <li><label for="horaires">Horaires</label>
        <li><label for="horaires">Ouverture :</label><input type="time" id="horaire" name="ouverture" value="<?php echo $horaire;?>"/></li>
        <li><label for="horaires">Fermeture :</label><input type="time" id="horaire" name="fermeture" value="<?php echo $horaire;?>"/></li>
        <li><label for="etablissement">Etablissement :</label><select name="etablissement" id="Etablissement" value="<?php echo $etablissement;?>">
            <option value="cafe">Café</option>
            <option value="restaurant">Restaurant</option></select></li>       
        <li><label for="photo">Photo :</label><input type="file" id="Photo" name="photo" value="<?php echo $photo;?>"/></li>
        <li><input type="reset" value="Effacer" /><input type="submit" value="Ajouter" name="inscription" /></li>
    </ul>
</form>
<script src="js/burger.js"></script>

</body>

<footer>
<div class="footer_container">
    <div class="footer_phone">
        <p> 📞  +33 6 12 34 56 78</p>
    </div>
     <div class="footer_logo-maps">
        <img src="./assets/img/logo_google-maps.png" alt="logo google maps">
     </div>
</div>
</footer>