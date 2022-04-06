<h1 class="h1-inscription">Inscription</h1>

<?php

include 'inscription.php';

if (isset($_POST['inscription'])) {
    $nom = htmlentities(mb_strtoupper(trim($_POST['name']))) ?? '';
    $prenom = htmlentities(ucfirst(mb_strtolower(trim($_POST['firstname'])))) ?? '';
    $email = trim(mb_strtolower($_POST['email'])) ?? '';
    $password = htmlentities(trim($_POST['password'])) ?? '';
    $passwordValidation = htmlentities(trim($_POST['passwordverif'])) ?? '';

    $erreur = array();

    if (preg_match('/(*UTF8)^[[:alpha:]]+$/', html_entity_decode($nom)) !== 1)
        array_push($erreur, "<p class='msg'>Veuillez saisir votre nom");
    else
        $nom = html_entity_decode($nom);

    if (preg_match('/(*UTF8)^[[:alpha:]]+$/', html_entity_decode($prenom)) !== 1)
        array_push($erreur, "<p class='msg'>Veuillez saisir votre prénom</p>");
    else
        $prenom = html_entity_decode($prenom);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($erreur, "<p class='msg'>Veuillez saisir un e-mail valide</p>");

    if (strlen($password) === 0)
        array_push($erreur, "<p class='msg'>Veuillez saisir un mot de passe</p>");

    if (strlen($passwordValidation) === 0)
        array_push($erreur, "<p class='msg'>Veuillez saisir la vérification de votre mot de passe</p>");

    if ($password !== $passwordValidation)
        array_push($erreur, "<p class='msg'>Vos mots de passe ne correspondent pas</p>");

    if (count($erreur) === 0) {
        $serverName = "localhost";
        $userName = "root";
        $database = "coffice";
        $userPassword = "root";

        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            $requete = $conn->prepare("SELECT * FROM users WHERE email='$email'");
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_OBJ);
           
            if(count($resultat) !== 0) {
                echo "<p class='msg'>Votre adresse est déjà enregistrée dans la base de données</p>";
            }

            else {
                $query = $conn->prepare("
                INSERT INTO users(nom, prenom, email, password)
                VALUES (:nom, :prenom, :email, :password)
                ");

                $query->bindParam(':nom', $nom, PDO::PARAM_STR_CHAR);
                $query->bindParam(':prenom', $prenom, PDO::PARAM_STR_CHAR);
                $query->bindParam(':email', $email, PDO::PARAM_STR_CHAR);
                $query->bindParam(':password', $password);
                $query->execute();
                
                echo "<p class='msg'>Votre compte à bien été crée !</p>";
            }
        } catch (PDOException $e) {
            die("Erreur :  " . $e->getMessage());
        }

        $conn = null;
    } else {
        $messageErreur = "<ul class='msg'>";
        $i = 0;
        do {
            $messageErreur .= "<li>" . $erreur[$i] . "</li>";
            $i++;
        } while ($i < count($erreur));

        $messageErreur .= "</ul>";

        echo $messageErreur;
        include 'frmInscription.php';
    }
} else {
    echo "<h2>Merci de renseigner le formulaire&nbsp;:</h2>";
    $nom = $prenom = $email = '';
    include 'frmInscription.php';
}