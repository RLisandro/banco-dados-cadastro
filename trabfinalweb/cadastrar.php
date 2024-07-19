<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar de alunos (as)</title>
    <link rel="stylesheet" href="principal.css">
</head>

<body>
    <h1>Cadastro de alunos (as)</h1><br>
    <form method="post" action="cadastro.php">

        Nome: <input type="text" name="name" required placeholder="Digite seu nome"><br>

        E-mail: <input type="email" name="email" required placeholder="Digite seu e-mail"><br>

        Senha: <input type="password" name="password" required placeholder="Digite sua senha "><br>

        <input type="submit">

    </form>
    <br>
  
    <a href="index.php"><input type="submit" value="Agora faça  login!"></a>

</body>

</html>