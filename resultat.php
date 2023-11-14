<html>
<head>
    <title>Resultat</title>
    <link rel="stylesheet" href="styleResult.css">
</head>
<form action="">
    <?php
    $iMax = $_POST["address"];
    intval($iMax);
    for ($i=1; $i <= $iMax; $i++) { 
       ?>
       <fieldset>
        <legend>Adresse  <?php echo $i ?></legend>
       <label for="id">id</label>
        <input type="text" id="id" name="id">
        <label for="street">street</label>
        <input type="text" id="street" name="street">
        <label for="streetNumber">street Number</label>
        <input type="text" id="streetNumber" name="streetNumber">
        <label for="street">street</label>
        <input type="text" id="street" name="street">
        <select id="type">
            <option value="livraison">Livraison</option>
            <option value="facturation">Facturation</option>
            <option value="autres">Autres</option>
        </select>
        </fieldset>
       <?php
    }
    ?>
    <a href="index.html"><- Retourner à la page précédente</a>
</form>

<?php


?>
</html>
