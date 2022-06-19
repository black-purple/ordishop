<?php
    $host = $_SERVER['SERVER_NAME'];
    $user = "root";
    $passwd = "";
    $dbname = "ordishop";

    $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
?>