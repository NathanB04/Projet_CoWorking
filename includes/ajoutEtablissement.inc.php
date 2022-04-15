<h1 class="h1-add-Etablissement">Ajout Etablissement</h1>

<?php

if (isset($_POST['ajoutEtablissement'])) {
    $nomEtablissement = htmlentities((trim($_POST['nom']))) ?? '';
    $adresse = htmlentities(trim($_POST['adresse'])) ?? '';
    $description = htmlentities(trim($_POST['description'])) ?? '';
    $horaire_O = trim(mb_strtolower($_POST['ouverture'])) ?? '';
    $horaire_F = trim(mb_strtolower($_POST['fermeture'])) ?? '';
    $etablissement = htmlentities(trim($_POST['etablissement'])) ?? '';

    $erreur = array();
    if (preg_match('/(*UTF8)^[[:alpha:]\s]+$/', html_entity_decode($nomEtablissement)) !== 1)
    array_push($erreur, "<p class='msg'>Veuillez saisir votre nom");
else
    $nomEtablissement = html_entity_decode($nomEtablissement);

if (preg_match('/(*UTF8)^[[:alnum:]\s]+$/', ($adresse)) !== 1)
    array_push($erreur, "<p class='msg'>Veuillez saisir votre adresse</p>");
else
    $adresse = ($adresse);

    if (preg_match('/(*UTF8)^[[:alpha:]\s]+$/', html_entity_decode($description)) !== 1)
    array_push($erreur, "<p class='msg'>Veuillez saisir une description</p>");
    else
    $description = html_entity_decode($description);

    if (preg_match('/\d\d:\d\d/', html_entity_decode($horaire_O)) !== 1)
    array_push($erreur, "<p class='msg'>Veuillez rentrer vos horaires d'ouverture</p>");
    else
    $horaire_O = html_entity_decode($horaire_O);

    if (preg_match('/\d\d:\d\d/', html_entity_decode($horaire_F)) !== 1)
    array_push($erreur, "<p class='msg'>Veuillez rentrer vos horaires de fermeture</p>");
    else
    $horaire_F = html_entity_decode($horaire_F);

    if (preg_match('/(*UTF8)^[[:alpha:]]+$/', html_entity_decode($etablissement)) !== 1)
    array_push($erreur, "<p class='msg'>Veuillez rentrer votre type d'etablissement</p>");
    else
    $etablissement = html_entity_decode($etablissement);

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $fileName = $_FILES['photo']['name'];
        $fileType = $_FILES['photo']['type'];
        $fileTmpName = $_FILES['photo']['tmp_name'];
        
        $tableauTypes = array("image/jpeg", "image/jpg", "image/png", "image/gif");

        if (in_array($fileType, $tableauTypes)) {
            $path = getcwd() . "/PhotosEtablissements/";
            $date = date('Ymdhis');
            $fileName = $date . $fileName;
            $fileNameFinal = $path . $fileName;
            $fileNameFinal = str_replace("\\", "/", $fileNameFinal);
        }
        else {
            array_push($erreur, "Erreur type MIME");
        }
    } else {
        $fileUploadError = $_FILES['photo']['error'];
        switch($fileUploadError) {
            case 1 :
                $fileUploadErrorMessage = "La taille du fichier téléchargé excède la valeur de upload_max_filesize.";
            break;
            case 2 :
                $fileUploadErrorMessage = "La taille du fichier téléchargé excède la valeur de MAX_FILE_SIZE, qui a été spécifiée dans le formulaire HTML.";
            break;
            case 3 :
                $fileUploadErrorMessage = "Le fichier n'a été que partiellement téléchargé.";
            break;
            case 4 :
                $fileUploadErrorMessage = "Aucun fichier n'a été téléchargé.";
            break;
            case 6 :
                $fileUploadErrorMessage = "Un dossier temporaire est manquant.";
            break;
            case 7 :
                $fileUploadErrorMessage = "Échec de l'écriture du fichier sur le disque.";
            break;
            case 8 :
                $fileUploadErrorMessage = "Une extension PHP a arrêté l'envoi de fichier.";
            break;
        }

        array_push($erreur, "Erreur upload : " . $fileUploadErrorMessage);
    }


    if (count($erreur) === 0) {
        $serverName = "localhost";
        $userName = "root";
        $database = "coffice";
        $userPassword = "root";

        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $requete = $conn->prepare("SELECT * FROM Etablissement WHERE nom = '$nomEtablissement'");
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_OBJ);
            if(count($resultat) !== 0) {
                echo "<p>Votre établissement est déjà enregistrée dans la base de données</p>";
            }

            else {
                var_dump($horaire_O);
                $query = $conn->prepare("
                INSERT INTO Etablissement(nom, adresse, description, horaire_O, horaire_F, Etablissement, Photo)
                VALUES (:nomEtablissement, :adresse, :description, :ouverture, :fermeture, :etablissement, :Photo)
                ");
                $query->bindParam(':nomEtablissement', $nomEtablissement, PDO::PARAM_STR_CHAR);
                $query->bindParam(':adresse', $adresse);
                $query->bindParam(':description', $description);
                $query->bindParam(':ouverture', $horaire_O);
                $query->bindParam(':fermeture', $horaire_F);
                $query->bindParam(':etablissement', $etablissement);
                $query->bindParam(':Photo', $fileName);
                $query->execute();

                move_uploaded_file($fileTmpName, $path . $fileName);
                
                echo "<p>Insertions effectuées</p>";
            }
        } catch (PDOException $e) {
            die("Erreur :  " . $e->getMessage());
        }

        $conn = null;
    } else {
        $messageErreur = "<ul>";
        $i = 0;
        do {
            $messageErreur .= "<li>" . $erreur[$i] . "</li>";
            $i++;
        } while ($i < count($erreur));

        $messageErreur .= "</ul>";

        echo $messageErreur;
    }
} else {
    echo "<h2>Merci de renseigner le formulaire&nbsp;:</h2>";
    $nomEtablissement = $adresse = '';
}
include 'ajoutEtablissement.php';
