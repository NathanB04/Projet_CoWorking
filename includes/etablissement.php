<!-- nous sommes sur la page de l'etablissement -->
<div class="logo">
    <img src="./assets/img/Coffice_Logo.png" alt="logo Coffice"> 
</div>

<nav>
            <div class="burger-button">
                <span class="burger-top"></span>
                <span class="burger-middle"></span>
                <span class="burger-bottom"></span>
            </div>
            <div class="burger-menu">
                <a href="http://localhost:8888/Projet_CoWorking/index.php?page=home">Accueil</a>
                <a href="">Se connecter</a>
                <a href="">Ajout d'un établissement</a>
            </div>
 </nav>




<body>
    <div class="body_container">
        <div class="title-etablissement-page">
            <h1>Nom de l'établissement</h1>
        </div>
        <div class="img-etablissement-page">
            <img src="./assets/img/cafe_coworking.jpg" alt="Image du café">
        </div>
        <div class="select-horaire-etablissement-page">
            <label for="day-select"><b>Choisissez un jour :</b></label>
                <select name="horaire" id="horaire">
                    <option value="lundi">Lundi 9H-17H</option>
                    <option value="mardi">Mardi 9H-17H</option>
                    <option value="mercredi">Mercredi 9H-17H</option>
                    <option value="jeudi">Jeudi 9H-17H</option>
                    <option value="vendredi">Vendredi 9H-17H</option>
                </select>
        </div>
        <div class="adresse-etablissement-page">
            <p><b>Adresse</b> : 12 Rue Traversière, 27140, Gisors.</p>
        </div>
        <div class="description-etablissement-page">
            <p><b>Description de l'établissement</b> : Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum beatae consequuntur, 
                excepturi voluptate debitis ab nulla fugiat nemo magni?
            </p>
        </div>
        <div class="avis-clients-etablissement-page">
            <p><b>Avis des clients</b> : </p>
            <p class="p-avis-clients">Roger : "<i>Lieu de dégustation d'excellents cafés sous toutes les déclinaisons, dans un lieu aménagé avec goût.
                Accueil chaleureux, souriant. On peut y acheter son arabica à emporter à la maison et des équipements
                 pour faire son café. Y aller entre amis pour une pause café, y aller seul et travailler sur son labtop...
                 tout est possible. Un lieu de tranquillité à recommander.</i>"
            </p>
            <p class="etoiles-moyenne-client-avis">★ ★ ★ ☆ ☆</p>
        </div>
    </div>

<script src="js/burger.js"></script>
</body>





