<?php

// CONNECTING TO THE DATABASE
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iot";
    $dbtable = "iotUSER";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        $db_response = $conn->query("SELECT name, value FROM $dbtable WHERE name= '$name' ");
        $value = $db_response->fetch_assoc()['value'];
        echo $value;
    }
?>