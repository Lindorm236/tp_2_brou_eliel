<?php
function insertInstanceIntoTable($conn, $street, $street_nb, $type, $city, $zipcode) {
    $sql = "INSERT INTO address (street, street_nb, type, city, zipcode) VALUES ('$street', '$street_nb', '$type', '$city', '$zipcode')";
}
var_dump($_POST);
?>