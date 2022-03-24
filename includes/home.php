<div class="logoHome">
    <img src="./assets/img/Coffice_Logo.png" alt="logo Coffice"> 
</div>
<header>
    <div class="navigation-desktop">
<nav role="navigation">
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="">Connexion</a></li>
            <li><a href="index.php?page=etablissement">Etablissement</a></li>
            <li><a href="">Contact</a></li>
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
                <a href="http://cafe-wifi.fr">Accueil</a>
                <a href="">Se connecter</a>
                <a href="">Ajout d'un établissement</a>
            </div>
 </nav>
 </div>
</header>

<div class="container">
    <div class="homepage">
        <img src="assets/img/coffice_homepage.jpeg">
    </div> 
    <div class="homepageMobile">
        <img src="assets/img/ResponsiveHome.jpeg">
    </div>
    <div class="search-bar">
     <form action="/action_page.php">
         <label for="lieu">Choisissez un établissement :</label>
         <br>
             <select id="lieu" name="lieu">
                <option value="cafe">Café</option>
                <option value="restaurant">Restaurant</option>
            </select>
            <input id="searchTextField" type="text" size="30" placeholder="Indiquez un lieu"> <br>
        <input type="submit" style="width: 8rem; height: 30px; background-color: #0099cc; 
        border-radius: 30px; color:white; font-weight:600; text-align:center">
    </form>
    </div>
     <div class="icons"> 
        <img src="assets/img/icons-facebook.png">
        <img src="assets/img/Instagram-Icon.png">
        <img src="assets/img/twitter-icon.png"> 
     </div>
     <div class="logoHome">
    <img src="./assets/img/Coffice_Logo.png" alt="logo Coffice"> 
</div>
    <script src="js/maps.js"></script>
    <script src="js/burger.js"></script>

</div>