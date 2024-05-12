<?php   
    $server="localhost"; 
    $user="root"; 
    $pass=""; 
    $db="customer"; 
       
    $mysqli = new mysqli($server, $user, $pass, $db);
 
    if($mysqli->connect_error) {
        die("Sorry, can't connect to the mysql.");
    }
?>