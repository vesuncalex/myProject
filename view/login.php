<?php
$servername = "localhost";
$username = "user";
$password = "secret";
$dbname = "myDBPDO";



try {
    $conn = new PDO("mysql:host=$servername;dbname=myDBPDO", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

echo "This is your page";