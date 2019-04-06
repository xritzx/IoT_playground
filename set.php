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
  
        if(isset($_GET['name']) && isset($_GET['value'])){

            $name = $_GET['name'];
            $value = $_GET['value'];
    
            $db_response = $conn->prepare("UPDATE $dbtable SET value = $value WHERE name = '$name' ")->execute();
            echo "Value set to $value";
            header("location:./?name=$name");
        }
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        }
    
?>