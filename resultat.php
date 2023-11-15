<html>
<head>
    <title>Resultat</title>
    <link rel="stylesheet" href="styleResult.css">
</head>
<form action="validation.php" method="post">
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
        <input class="info" type="text" id="street" name="street">
        <label for="streetNumber">street Number</label>
        <input class="info" type="text" id="streetNumber" name="streetNumber">
        <label for="street">street</label>
        <input class="info" type="text" id="street" name="street">
        <select id="type">
            <option value="livraison">Livraison</option>
            <option value="facturation">Facturation</option>
            <option value="autres">Autres</option>
        </select>
        <select id="localisation">
            <option value="Montréal">Montréal</option>
            <option value="Quebec">Quebec</option>
            <option value="Ontario">Ontario</option>
        </select>
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
