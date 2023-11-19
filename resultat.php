<html>
<head>
    <title>Resultat</title>
    <link rel="stylesheet" href="styleResult.css">

</head>
<form action="affichage.php" method="post" name="form" id="inscrire">
    <?php
    session_start();
    $iMax = $_POST["address"];
    var_dump($_POST["address"]);
    $_SESSION["address"]["addressnb"]=$_POST["address"];
    var_dump( $_SESSION["address"]["addressnb"]);
    intval($iMax);
    for ($i=1; $i <= $iMax; $i++) { 
       ?>
        <fieldset>
        <legend>Adresse  <?php echo $i;?></legend>
       <label for="id">id</label>
        <input class="info" type="text" id="id" name="id">
        <label for="street<?php echo $i;?>">street</label>
        <input class="info" type="text" id="street<?php echo $i; ?>" name="street<?php echo $i; ?>">
        <label for="street_nb<?php echo $i; ?>">street Number</label>
        <input class="info" type="text" id="street_nb<?php echo $i; ?>" name="street_nb<?php echo $i; ?>">
        
        <select id="type<?php echo $i; ?>" name="type<?php echo $i; ?>">
            <option value="livraison">Livraison</option>
            <option value="facturation">Facturation</option>
            <option value="autres">Autres</option>
        </select>
        <select id="city" name="city<?php echo $i; ?>">
            <option value="Montréal">Montréal</option>
            <option value="Quebec">Quebec</option>
            <option value="Ontario">Ontario</option>
        </select>
        <label for="zipcode">zipcode</label>
        <input class="info" type="text" id="zipcode<?php echo $i;?>" name="zipcode<?php echo $i; ?>">
        </fieldset>
       <?php
    }

    ?>
    <button type="submit" >Envoyer</button>
    <button type="reset">Annuler</button>
    
</form> 

<?php


?>
</html>
