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

<<<<<<< HEAD
    <nav>
        <div class="burger-button">
            <span class="burger-top"></span>
            <span class="burger-middle"></span>
            <span class="burger-bottom"></span>
        </div>
        <div class="burger-menu">
            <a href="index.php?page=home">Accueil</a>
            <a href="index.php?page=login">Se connecter</a>
            <a href="index.php?page=etablissement">Ajout d'un établissement</a>
            <a href="index.php?page=resultats">Liste des établissements</a>
        </div>
    </nav>
=======
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
>>>>>>> 243fd8fee4074fcef850d8542754d8d1e6bcce32

    <script src="js/burger.js"></script>

</body>

<footer>
<<<<<<< HEAD
    <div class="footer_container">
        <div class="footer_phone">
            <p> 📞 +33 6 12 34 56 78</p>
        </div>
        <div class="footer_logo-maps">
            <img src="./assets/img/logo_google-maps.png" alt="logo google maps">
        </div>
    </div>
=======
<div class="footer_container">
<div class="button-add">
        <a href="index.php?page=ajoutEtablissement">
        <img src="./assets/img/button-add.png" alt="bouton ajouter etablissement">
        </a>    
</div>
>>>>>>> 243fd8fee4074fcef850d8542754d8d1e6bcce32
</footer>