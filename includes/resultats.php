<!-- nous sommes sur la page des résultats -->
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
                <a href="index.php?page=login">Connexion</a>
                <a href="index.php?page=inscription">Inscription</a>
                <a href="index.php?page=etablissement">Ajout d'un établissement</a>
                <a href="index.php?page=resultats">Liste des établissements</a>
    </div>
</nav>

<div class="container">
    <div class="product-details">
        <h1>Australian café</h1>
        <p class="information"><g><b>Description brève:</b> "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Cupiditate, atque molestiae velit nesciunt laborum odit eligendi minus ratione totam doloremque.</g></p>
        <div class="control">
            <button class="btn">
                <span class="moreInfo"><g>Plus d'info</g></span>
            </button>
        </div>
    </div>
    <div class="product-image">
        <img src="./assets/img/cafe_coworking.jpg" alt="Image du café">
    </div>
</div>

<div class="container">
    <div class="product-details">
        <h1>Australian café</h1>
        <p class="information"><g><b>Description brève:</b> "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Cupiditate, atque molestiae velit nesciunt laborum odit eligendi minus ratione totam doloremque.</g></p>
        <div class="control">
            <button class="btn">
                <span class="moreInfo"><g>Plus d'info</g></span>
            </button>
        </div>
    </div>
    <div class="product-image">
        <img src="./assets/img/cafe_coworking.jpg" alt="Image du café">
    </div>
</div>

<div class="container">
    <div class="product-details">
        <h1>Australian café</h1>
        <p class="information"><g><b>Description brève:</b> "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Cupiditate, atque molestiae velit nesciunt laborum odit eligendi minus ratione totam doloremque.</g></p>
        <div class="control">
            <button class="btn">
                <span class="moreInfo"><g>Plus d'info</g></span>
            </button>
        </div>
    </div>
    <div class="product-image">
        <img src="./assets/img/cafe_coworking.jpg" alt="Image du café">
    </div>
</div>

<div class="container">
    <div class="product-details">
        <h1>Australian café</h1>
        <p class="information"><g><b>Description brève:</b> "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Cupiditate, atque molestiae velit nesciunt laborum odit eligendi minus ratione totam doloremque.</g></p>
        <div class="control">
            <button class="btn">
                <span class="moreInfo"><g>Plus d'info</g></span>
            </button>
        </div>
    </div>
    <div class="product-image">
        <img src="./assets/img/cafe_coworking.jpg" alt="Image du café">
    </div>
</div>

<script src="js/burger.js"></script>
 
</body>

<footer>
<div class="footer_container">
<div class="button-add">
        <a href="index.php?page=ajoutEtablissement">
        <img src="./assets/img/button-add.png" alt="bouton ajouter etablissement">
        </a>
    </div>
</div>
</footer>