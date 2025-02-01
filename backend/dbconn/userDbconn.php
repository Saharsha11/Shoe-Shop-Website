<?php
    //MYSQLI DATABASE CONNECTION
    // $servername = "localhost";
    // $username = "root";
    // $password = "";

    // // Create connection
    // $conn = new mysqli($servername, $username, $password,"online_shopping");

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    //PDO DATABASE CONNECTION
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=shoes", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    // die("Hello");
?>
    