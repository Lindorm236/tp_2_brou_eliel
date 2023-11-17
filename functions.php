<?php
function usernameIsValid(string $street):array{
    $isValid = true;
    
   if (strlen($street)>50) {
   $result=[
        'isValid'=>false,
        'msg'=>'nom de rue trop long'
   ];
   return $result;
   }
   elseif (strlen($street)<2) {
    $result=[
        'isValid'=>false,
        'msg'=>'nom de rue trop court'
    ];
    return $result;
   }

}