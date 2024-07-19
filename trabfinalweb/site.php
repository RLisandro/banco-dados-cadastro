<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="logout.css">
</head>

<body>

    <h1> Voltar a página de login</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="logout" value="Encerrar sessão">


        <?php

        if (isset($_POST["logout"])) {
            logout();
        }
        ?>

</body>

</html>
<?php
session_start();
require "config.php";
require "index1.php";


function logout()
{
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit;
}

