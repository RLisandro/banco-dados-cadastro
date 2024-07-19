<?php
session_start();
    require_once "config.php";
  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $sql = "SELECT * FROM users WHERE name = ? AND email = ?";

    $stmt = $conn->prepare($sql);
    $stmt ->bind_param("ss", $name, $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc(); 

        if (password_verify($password, $row['password'])) {

            $_SESSION["loggedin"] = true; 

            header("Location: site.php"); 
            exit; 

        }
    }

    else {
        $error = "Usuário ou senha incorretos";
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos (as)</title>
    <link rel="stylesheet" href="principal.css">
</head>

<body>
    <h1> Login de alunos (as)</h1>

    <form method="post" action="index.php">
        Nome: <input type="text" name="name" required placeholder="Digite seu nome "><br>

        E-mail: <input type="email" name="email" required placeholder="Digite seu e-mail"><br>

        Senha: <input type="password" name="password" required placeholder="Digite sua senha "><br>

        <input type="submit" value="Logar">

    </form>
    <br>
    <a href="cadastrar.php"><input type="submit" value="Ainda não é cadastrado aluno (a)?"></a>
</body>
</html>