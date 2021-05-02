<?php

include "configuracion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);


if(mysqli_connect_errno()){
 
    echo "No conectado", mysqli_connect_error() ;
    exit();
}

?>