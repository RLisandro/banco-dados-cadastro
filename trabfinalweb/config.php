<?php

    $servername = "localhost"; // Para teste//
    $username = "lisandro";
    $password = "2005";
    $dbname = "login";


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
