<div class="logo">
    <a href="index.php?page=home">
        <img src="./assets/img/coffice_logo_blanc.png" alt="logo Coffice">
    </a>
</div>

<body class="resultatsPage">

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

    <div class="email">
        <p>
            <o>E-mail :</o> lorem@lorem.com
        </p>
    </div>

    <div class="phone">
        <p>
            <o>Numéro de téléphone :</o> 00.00.00.00.00
        </p>
    </div>
    <div class="burger-menu">
                <a href="index.php?page=home">Accueil</a>
                <a href="index.php?page=login">Connexion</a>
                <a href="index.php?page=inscription">Inscription</a>
                <a href="index.php?page=etablissement">Ajout d'un établissement</a>
                <a href="index.php?page=resultats">Liste des établissements</a>
                
    </div>
</nav>

<div class="email">
    <p><o>E-mail :</o> lorem@lorem.com</p>
</div>

<div class="phone">
    <p><o>Numéro de téléphone :</o> 00.00.00.00.00</p>
</div>

    <script src="js/burger.js"></script>
</body>

<footer>
    <div class="footer_container">
        <div class="footer_phone">
            <p> 📞 +33 6 12 34 56 78</p>
        </div>
        <div class="footer_logo-maps">
            <img src="./assets/img/logo_google-maps.png" alt="logo google maps">
        </div>
    </div>
<div class="footer_container">
<div class="button-add">
        <a href="index.php?page=ajoutEtablissement">
        <img src="./assets/img/button-add.png" alt="bouton ajouter etablissement">
        </a>
    </div>
</div>
</footer>