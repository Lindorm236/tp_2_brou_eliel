<?php


$addressNombre = isset($_SESSION["address"]["addressnb"]) ? $_SESSION["address"]["addressnb"] : 0;

function insertInstanceIntoTable($street, $street_nb, $type, $city, $zipcode)
{
    $sql = "INSERT INTO address (street, street_nb, `type`, city, zipcode) VALUES ('$street', '$street_nb', '$type', '$city', '$zipcode')";

    $mysqli = mysqli_init();
    $connect = $mysqli->real_connect("localhost", "root", "", "ecom1_tp2");
    if ($connect) {
        return mysqli_query($mysqli, $sql);
    } else {
        return mysqli_connect_error();
    }
}
