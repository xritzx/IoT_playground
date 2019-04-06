<?php
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