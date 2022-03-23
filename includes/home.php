<header>
<nav role="navigation">
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="">Connexion</a></li>
            <li><a href="index.php?page=etablissement">Etablissement</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <div class="homepage">
        <img src="assets/img/coffice_homepage.jpeg">
    </div>
    <div class="search-bar">
     <form action="/action_page.php">
         <label for="lieu">Choisissez un établissement :</label>
         <br>
             <select id="lieu" name="lieu">
                <option value="cafe">Café</option>
                <option value="restaurant">Restaurant</option>
            </select>
            <input id="searchTextField" type="text" size="30" placeholder="Indiquez un lieu">
        <input type="submit" style="width: 8rem; height: 30px; background-color: #0099cc; 
        border-radius: 30px; color:white; font-weight:600">
    </form>
    </div>
     <div class="icons"> 
        <img src="assets/img/icons-facebook.png">
        <img src="assets/img/Instagram-Icon.png">
        <img src="assets/img/twitter-icon.png"> 
     </div>
    <script src="js/maps.js"></script>

</div>