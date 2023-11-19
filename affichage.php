<link rel="stylesheet" href="styleAffichage.css">
<fieldset>
    <?php
    require_once("crud.php");
    require_once("functions.php");
    require_once("validation.php");
    session_start();

    $addressNombre = isset($_SESSION["address"]["addressnb"]) ? $_SESSION["address"]["addressnb"] : 0;



    for ($i = 1; $i <= $addressNombre; $i++) {
        echo "<p>Voici les informations de l'adresse $i";
        echo "<br><br>";
        echo "street $i :" . $_POST["street$i"];
        echo "<br><br>";
        echo "street_nb $i :" . $_POST["street_nb$i"];
        echo "<br><br>";
        echo "type $i :" . $_POST["type$i"];
        echo "<br><br>";
        echo "city $i :" . $_POST["city$i"];
        echo "<br><br>";
        echo "zipcode $i :" . $_POST["zipcode$i"];
        echo "<br><br><br><br>";
    }


    $insertInstanceIntoTable = insertInstanceIntoTable($_POST["street$i"], $_POST["street_nb$i"], $_POST["type$i"], $_POST["city$i"], $_POST["zipcode$i"]);

    ?>




    <form action="" method="post">
        <?php







        ?>

        <button type="submit">Confirmer</button>
    </form>
</fieldset>