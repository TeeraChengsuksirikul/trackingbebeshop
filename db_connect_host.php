<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "id18662737_bbstracking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

    // Change character set to utf8
    $conn->set_charset("utf8");
    };
?>