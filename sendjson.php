<?php

$database_user = 'u254792697_coopolarway';
$database_pasw = 'ColmeHost06.';
$database_name = 'u254792697_mydaytoday';
$usertable = 'usertable_tasks';

if($_POST["json"]){

    $con = mysqli_connect('localhost', $database_user, $database_pasw);
    mysqli_select_db($con, $database_name);

    $json = $_POST["json"];

    $sentencia = "INSERT INTO jsons VALUES('$json',NULL)";
    
    if (mysqli_query($con, $sentencia)) {

        echo $sentencia;

    } else {

        echo "-Error occurred: " . mysqli_error($con);

    }
}