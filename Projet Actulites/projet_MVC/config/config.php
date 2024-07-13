<?php
$servername = "localhost";
$username = "mglsi_user";
$password = "passer";
$dbname = "mglsi_news";

function connectDB() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    return $conn;
}
?>
