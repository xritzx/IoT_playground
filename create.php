<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "iot";
    // $dbtable = "iotUSER";


    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);

    $servername = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $dbname = ltrim($dbparts['path'],'/');
    $dbtable = "iotUSER";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $name = $_POST['name'];
        $value = $_POST['value'];
        
        $create_table = "
            CREATE TABLE IF NOT EXISTS iotUSER (
                name VARCHAR(30) PRIMARY KEY,
                value INT(100) NOT NULL
            );";

        if ($conn->exec($create_table)) {
            echo "Table Created";
        }

        if($conn->exec("INSERT INTO $dbtable (name, value) VALUES ('$name', '$value')")){
            header("location:./?name=$name");
        }
    }

    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }



    
  
?>