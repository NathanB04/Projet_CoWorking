<?php

include 'ajoutEtablissement.php';

if (isset($_POST['ajoutEtablissement'])) {
    $nomEtablissement = trim(mb_strtolower($_POST['nom'])) ?? '';
    $adresse = trim(mb_strtolower($_POST['adresse'])) ?? '';
    $description = trim(mb_strtolower($_POST['description'])) ?? '';
    $horaires = trim(mb_strtolower($_POST['horaires'])) ?? '';
    $etablissement = trim(mb_strtolower($_POST['Etablissement'])) ?? '';
    $photo = trim(mb_strtolower($_POST['Photo'])) ?? '';

    $erreur = array();

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
        $userPassword = "";

        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $requete = $conn->prepare("SELECT * FROM Etablissement");
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_OBJ);
           
            if(count($resultat) !== 0) {
                echo "<p>Votre adresse est déjà enregistrée dans la base de données</p>";
            }

            else {
                $query = $conn->prepare("
                INSERT INTO Etablissement(nom, adresse, description, horaires, Etablissement, Photo)
                VALUES (NULL, :nom, :adresse, :description, :horaires, :Etablissement, :Photo)
                ");
                $query->bindParam(':nom', $nomEtablissement, PDO::PARAM_STR_CHAR);
                $query->bindParam(':adresse', $adresse);
                $query->bindParam(':description', $description);
                $query->bindParam(':horaires', $horaires, PDO::PARAM_STR_CHAR);
                $query->bindParam(':Etablissement', $etablissement);
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
        include 'frmInscription.php';
    }
} else {
    echo "<h2>Merci de renseigner le formulaire&nbsp;:</h2>";
    $nomEtablissement = $adresse = '';
}