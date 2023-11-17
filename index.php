<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styleIndex.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script language="javascript"> 
  function validation(){
 document.getElementById("recupAddress").addEventListener('submit', function(e){
 // e.preventDefault();
   var address = document.getElementById("address").value;
   if ((address>10)||(address<0)) {
    var erreur = "vous ne pouvez pas avoir un tel nombre d'adresses, veuillez réessayer !";
   }
   
   if (erreur) {
    e.preventDefault();
    alert(erreur);
   }
   else{
    alert("biien recu");
   }
 });
}
  </script>
  </head>
  <body>
    <!--Création du premier formulaire -->
    <form action="resultat.php" method="post" id="recupAddress">
      <fieldset>
        <label for="address">Entrez le nombre d'adresses svp !</label><br />
        <input class="saisie" type="number" name="address" id="address" /><br />
        <button type="submit" onclick="validation();">Envoyer</button>
      </fieldset>
    </form>
  </body>
</html>
