<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styleIndex.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

  </head>
  <body>
    <!--Création du premier formulaire -->
    <form action="resultat.php" method="post" id="recupAddress">
      <fieldset>
        <label for="address">Entrez le nombre d'adresses svp !</label><br />
        <input class="saisie" type="number" name="address" id="address" /><br />
        <button type="submit" >Envoyer</button>
      </fieldset>
    </form>
  </body>
</html>
