<?php
function streetIsValid(string $street):array{
    $isValid = true;
    $result=[
        'isValid'=>false,
        'msg'=>''
    ];
    echo"<br><br>";
    
   if (strlen($street)>50) {
   $result=[
        'isValid'=>false,
        'msg'=>'<h2><center>Error ! </center></h2> Le nom de la rue est trop long veuillez ressayer'
   ];
   
   }
   return $result;
  if (strlen($street)<2) {
    $result=[
        'isValid'=>false,
        'msg'=>'nom de rue trop court'
    ];
    
   }
   return $result;
}