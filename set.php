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

    if(isset($_GET['name']) && isset($_GET['value'])){
        echo "GET";
        $name = $_GET['name'];
        $value = $_GET['value'];

        $db_response = $conn->query("UPDATE $dbtable SET value = $value WHERE name = '$name' ");
        echo "Value set to $value";
        header("location:./?name=$name");
    }
?>