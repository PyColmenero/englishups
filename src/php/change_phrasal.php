<?php

// CONECCTION DATA
$database_user = 'u254792697_coopolarway';
$database_pasw = 'ColmeHost06.';
$database_name = 'u254792697_mydaytoday';


// INSERT
$con = mysqli_connect('localhost', $database_user, $database_pasw);
mysqli_select_db($con, $database_name);

$type = ($_POST['type'] == "1") ? "0" : "1";
$sentencia = "UPDATE `phrasalverbs` SET `type` = '$type' WHERE `phrasalverbs`.`id` = ".$_POST['id'].";";
$data = mysqli_query($con, $sentencia);
echo $sentencia;
echo $data;