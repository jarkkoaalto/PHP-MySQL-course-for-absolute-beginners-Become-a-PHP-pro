<?php
    // Paramenters to connect to the database
    $dbHost="localhost";
    $dbUser="root";
    $dbPass="";
    $dbName="phptutorial";

    // Connection to database
    $conn = mysqli_connect($dbHost,$dbUser, $dbPass, $dbName);

    if(!$conn){
        die("Database connection failed!");
    }

?>