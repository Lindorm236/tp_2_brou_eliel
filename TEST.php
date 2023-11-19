<html>
<head>
    <title>Resultat</title>
    <link rel="stylesheet" href="styleResult.css">
</head>
<form action="affichage.php" method="post" name="form">
    <?php
    $iMax = $_POST["address"];

    

    intval($iMax);
    for ($i=1; $i <= $iMax; $i++) { 
       ?>
        <fieldset>
        <legend>Adresse  <?php echo $i ?></legend>
       <label for="id">id</label>
        <input class="info" type="text" id="id" name="id">
        <label for="street">street</label>
        <input class="info" type="text" id="street" name="street <?php $i ?>">
        <label for="street_nb">street Number</label>
        <input class="info" type="text" id="street_nb" name="street_nb <?php $i ?>">
        
        <select id="type" name="type <?php $i ?>">
            <option value="livraison">Livraison</option>
            <option value="facturation">Facturation</option>
            <option value="autres">Autres</option>
        </select>
        <select id="city" name="city <?php $i ?>">
            <option value="Montréal">Montréal</option>
            <option value="Quebec">Quebec</option>
            <option value="Ontario">Ontario</option>
        </select>
        <label for="zipcode">zipcode</label>
        <input class="info" type="text" id="zipcode" name="zipcode <?php $i ?>">
        </fieldset>
       <?php
    }

    ?>
    <button type="submit">Envoyer</button>
    <button type="reset">Annuler</button>
    
</form> 

<?php


?>
</html>
