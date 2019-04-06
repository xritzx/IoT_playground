<?php

// CONNECTING TO THE DATABASE
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "iot";
    // $dbtable = "iotUSER";

    $url = 'mysql://uygb6pmovwu6cx5s:v5ptw8fvkwiwv054@pfw0ltdr46khxib3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/fw7m3t4h30lpmtlm';
    $dbparts = parse_url($url);

    $servername = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $dbname = ltrim($dbparts['path'],'/');
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




