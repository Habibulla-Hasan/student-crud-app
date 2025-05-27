<?php 

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'projectone';

    $conn = new mysqli ($host, $user, $password, $database);

    if (!$conn) {
        echo 'Database Connection Failed!';
    }

?>