<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iot";
    $dbtable = "iotUSER";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully"; 

        $name = $_POST['name'];
        $value = $_POST['value'];

        if($conn->exec("INSERT INTO $dbtable (name, value) VALUES ('$name', '$value')")){
            header("location:./?name=$name");
        }
    }

    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }



    
  
?>