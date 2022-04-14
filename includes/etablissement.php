<!-- nous sommes sur la page de l'etablissement -->
<div class="logo">
    <a href="index.php?page=home">
        <img src="./assets/img/coffice_logo_blanc.png" alt="logo Coffice">
    </a>
</div>

<body class="body_etablissement">

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
                    <li><a href="index.php?page=ajoutEtablissement">Etablissement</a></li>
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
            <a href="index.php?page=ajoutEtablissement">Ajout d'un établissement</a>
            <a href="index.php?page=resultats">Liste des établissements</a>
        </div>
    </nav>

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
                <a href="index.php?page=ajoutEtablissement">Ajout d'un établissement</a>
                <a href="index.php?page=resultats">Liste des établissements</a>
    </div>
 </nav>

    <div class="body_container">
        <div class="title-etablissement-page">
            <h1>Nom de l'établissement</h1>
        </div>
        <div class="img-etablissement-page">
            <img src="./assets/img/cafe_coworking.jpg" alt="Image du café">
        </div>
        <div class="select-horaire-etablissement-page">
            <label for="day-select"><b>
                    <o>Choisissez un jour :</o>
                </b></label>
            <select name="horaire" id="horaire">
                <option value="lundi">Lundi 9H-17H</option>
                <option value="mardi">Mardi 9H-17H</option>
                <option value="mercredi">Mercredi 9H-17H</option>
                <option value="jeudi">Jeudi 9H-17H</option>
                <option value="vendredi">Vendredi 9H-17H</option>
            </select>
        </div>
        <div class="adresse-etablissement-page">
            <p><b>
                    <o>Adresse</o>
                </b> : Lorem, ipsum dolor, 27140, Gisors.</p>
        </div>
        <div class="description-etablissement-page">
            <p><b>
                    <o>Description de l'établissement</o>
                </b> : Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum beatae consequuntur,
                excepturi voluptate debitis ab nulla fugiat nemo magni?
            </p>
        </div>
        <div class="avis-clients-etablissement-page">
            <p><b>
                    <o>Avis des clients</o>
                </b> : </p>
            <p class="p-avis-clients"><b>Roger : </b>"<i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis
                    qui autem, quam est tempora deserunt voluptatem quos sapiente consectetur eum dolore animi?
                    Explicabo perspiciatis atque dolores incidunt? Repudiandae, vero. Nisi.</i>"
            </p>
            <p class="etoiles-moyenne-client-avis">★ ★ ★ ☆ ☆</p>
        </div>
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
</footer>