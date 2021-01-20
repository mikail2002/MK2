<?php
$dsn = "mysql:host=localhost;dbname=makelaar";
$username = "root";
$password = "";

try {
    $db = new PDO($dsn, $username, $password);
    //echo "Je bent verbonden met de database! <br />";
} catch (PDOException $e){
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}
?>
