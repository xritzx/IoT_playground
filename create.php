<?php
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
    echo "DB Connected successfully";

    $name = $_POST['name'];
    $value = $_POST['value'];
    
    if($conn->query("INSERT INTO $dbtable (name, value) VALUES ('$name', '$value')")){
        header("location:./?name=$name");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>