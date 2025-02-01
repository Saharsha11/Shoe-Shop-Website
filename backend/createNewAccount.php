<?php
require_once('C:\xampp\htdocs\project\backend\dbconn\userDbconn.php');

$email = $password = $uname =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["username"];
    $email = $_POST["eml"];
    $password = $_POST["password"];
}

// $sql = "CREATE TABLE IF NOT EXISTS usersinfo(
//         Username varchar(50) NOT NULL,
//         Email VARCHAR(50) PRIMARY KEY,
//         Password VARCHAR(50) NOTNULL
//         )";

// try {
//     $resilt = $conn->exec($sql);
//     //code...
// } catch (\Throwable $th) {
//     echo $th;
// }
// echo $resilt;

$sql = "INSERT INTO usersinfo (Username,Email,Password)
    VALUES ('$uname','$email','$password')";
// dd($sql);

if (($result = $conn->exec($sql))) {
    header("Location: http://localhost/project/index.php");
} else {
    echo "error in creation of data.";
}
