<form action="index.php?page=ajoutEtablissement" method="post" enctype="multipart/form-data">
    <ul>
        <li><label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="<?php echo (isset($nomEtablissement)) ? $nomEtablissement : '';;?>"/></li>
        <li><label for="adresse">Adresse :</label><input type="text" id="adresse" name="adresse" value="<?php echo (isset($adresse)) ? $adresse : '';;?>"/></li>
        <li><label for="description">Description :</label><textarea id="description" name="description"  value="<?php echo $description;?>"></textarea></li>
        <li><label for="horaires">Horaires</label>
        <li><label for="horaires">Ouverture :</label><input type="time" id="horaire" name="ouverture" value="<?php echo $horaire;?>"/></li>
        <li><label for="horaires">Fermeture :</label><input type="time" id="horaire" name="fermeture" value="<?php echo $horaire;?>"/></li>
        <li><label for="etablissement">Etablissement :</label><select name="etablissement" id="Etablissement" value="<?php echo $etablissement;?>">
            <option value="cafe">Café</option>
            <option value="restaurant">Restaurant</option></select></li>       
        <li><label for="photo">Photo :</label><input type="file" id="photo" name="photo" value="<?php echo $photo;?>"/></li>
        <li><input type="reset" value="Effacer" /><input type="submit" name="ajoutEtablissement" value="Ajouter" name="inscription" /></li>
    </ul>
</form>