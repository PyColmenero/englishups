<?php

// CONECCTION DATA
$database_user = 'u254792697_coopolarway';
$database_pasw = 'ColmeHost06.';
$database_name = 'u254792697_mydaytoday';


// INSERT
$con = mysqli_connect('localhost', $database_user, $database_pasw);
mysqli_select_db($con, $database_name);

$sentencia = "SELECT * FROM phrasalverbs";
$data = mysqli_query($con, $sentencia);

foreach ($data as $key => $value) {

    echo ", [\"".$value["phrasal_verb"] ."\",". $value["type"].",".$value["id"]. "]";
    
}