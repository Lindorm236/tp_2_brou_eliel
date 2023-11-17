<?php
require_once("crud.php");
require_once("functions.php");
session_start();

$addressNombre = isset($_SESSION["address"]["addressnb"])? $_SESSION["address"]["addressnb"] :0;
var_dump($addressNombre);
var_dump($_POST);
for($i=1; $i<=$addressNombre; $i++){
    echo"ADRESSE $i";
    echo"<br><br>";
     echo "street $i :".$_POST["street$i"];
     echo"<br><br>";
     echo "street_nb $i :".$_POST["street_nb$i"];
     echo"<br><br>";
     echo "type $i :".$_POST["type$i"];
     echo"<br><br>";
     echo "city $i :".$_POST["city$i"];
     echo"<br><br>";
     echo "zipcode $i :".$_POST["zipcode$i"];
     echo"<br><br><br><br>";


}
    



?>




<!-- <form action="validation.php" method="post">
    <?php
        // if(count($recupInfos)>0){
        //   foreach($recupInfos as $key => $value){// i++  echo 
            
              
               
                
        //         echo"<input type='text' name= '$key'  value='$value'  /> <br/>";

                
                
        //     }
        // }
    
       
    ?>
    <button type="submit">Confirmer</button>
</form>  -->