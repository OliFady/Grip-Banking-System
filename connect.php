<?php

$source = 'localhost';
$name = 'root';
$pass = '';
$db='Bank';

try{
    $connection = new mysqli($source,$name,$pass,$db);
}
catch(PDOException){
    echo "Failed to Connect";
}

?>