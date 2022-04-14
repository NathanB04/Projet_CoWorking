<div class="logoHome">
    <img src="./assets/img/coffice_logo_blanc.png" alt="logo Coffice"> 
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
            <li><a href="index.php?page=ajoutEtablissement">Etablissement</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    </div>
   
    <div class="navigation-mobile">
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
    </div>

</header>

<main>

<div class="container_home">
    <div class="homepage">
        <img src="assets/img/COVER_HOME.png">
    </div> 
    <div class="homepageMobile">
        <img src="assets/img/COVER_HOME_Portrait.png">
    </div>
    <div class="Logo_concept">
    <img src="./assets/img/coffice_concept.png">
</div>
        <div class="search-bar">

             <form action="/action_page.php">
                 <label for="lieu">Choisissez un établissement :</label>
         <br>
                 <select id="lieu" name="lieu">
                    <option value="cafe">Café</option>
                    <option value="restaurant">Restaurant</option>
                </select>
            <input id="searchTextField" type="textPlace" name="city" size="30" placeholder="Indiquez un lieu"/> <br>
            <input type="submit" style="width: 8rem; height: 30px; background-color: #d66b24; 
            border-radius: 30px; color:white; font-weight:600; text-align:center">
            </form>
         </div>

 </main>

     <div class="icons"> 
        <img src="assets/img/icons-facebook.png">
        <img src="assets/img/Instagram-Icon.png">
        <img src="assets/img/twitter-icon.png"> 
     </div>
    <script src="js/maps.js"></script>
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