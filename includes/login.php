<div class="logo">
    <a href="http://localhost/Projet_CoWorking/">
        <img src="./assets/img/coffice_logo_blanc.png" alt="logo Coffice"> 
    </a>
</div>

<header>
    <div class="navigation-desktop">
        <nav role="navigation">
            <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=login">Connexion</a></li>
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
                <a href="index.php?page=login">Se connecter</a>
                <a href="index.php?page=etablissement">Ajout d'un établissement</a>
                <a href="index.php?page=resultats">Liste des établissements</a>
    </div>
</nav>

<div class="container-frm">
<form action="index.php?page=login" method="post">
    <ul>
        <li><label for="mail">e-mail :</label><input type="text" id="mail" name="mail" /></li>
        <li><label for="mdp">Mot de passe</label><input type="password" id="mdp" name="mdp" /></li>
        <li><input type="reset" value="Effacer" /><input type="submit" value="Envoyer" name="envoi" /></li>
    </ul>
</form>
</div>
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