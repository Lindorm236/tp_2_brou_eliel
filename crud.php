<?php
    function create($data){
        global $conn;
        $query="INSERT INTO 'address' ('id', 'street', 'street_nb', 'type', 'city', 'zipcode') VALUES (NULL," .$data['street'].", ".$data['streeb_nb'].", ".$data['type'].", ".$data['city'].", ".$data['zipcode'].");";
        $result= mysqli_query($conn, $query);
    }

    function createAdress($data){
        global $conn;
        $query = "INSERT INTO address VALUES (NULL, ?,?,?,?,?)";


        if ($stmt = mysqli_prepare($conn, $query)) {
            mysqli_stmt_bind_param($stmt, "sisss", $data['street'], $data['street_nb'], $data['type'], $data['city'], $data['zipcode']);
            $result = mysqli_stmt_execute($stmt);
            echo"<br>";
            var_dump($result);
        }
    }
?>