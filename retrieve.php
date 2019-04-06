<?php

// CONNECTING TO THE DATABASE
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iot";
    $dbtable = "iotUSER";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if(isset($_GET['name'])){

            $name = $_GET['name'];
            $stmt = $conn->prepare("SELECT name, value FROM $dbtable WHERE name= '$name' ");
            $stmt->execute();
            
            $value = $stmt->fetchAll()[0]['value'];
            echo $value;
        }

        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }


   
?>