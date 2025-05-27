<?php 

    $host = 'sql305.infinityfree.com';
    $user = 'if0_39090991';
    $password = '';
    $database = 'if0_39090991_projectone';

    $conn = new mysqli ($host, $user, $password, $database);

    if (!$conn) {
        echo 'Database Connection Failed!';
    }

?>
