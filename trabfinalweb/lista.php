<?php
require_once('config.php');

$comando = "SELECT * FROM users ORDER BY id DESC";
$enviar = mysqli_query($conn, $comando);
$resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>
<h1> Tabela dos Alunos (as) cadastrados(as)</h1>
<table width="40%" border="0" cellspacing="10" cellpadding="4" bgcolor=" #83cfd6">
    <tr align="center" bgcolor="#57afcf">
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>

    </tr>
    <?php
    foreach ($resultado as $aluno) {
        $servername = $aluno['id'];
        $nome = $aluno['name'];
        $email = $aluno['email'];


        echo "<tr align='center' bgcolor='#57afcf'><td>$servername</td><td>$nome</td><td>$email</td></tr>";
    }
    mysqli_close($conn);
    ?>
</table>
<style>
    body{
        background-color: #02a3ed;
    }
    h1 {
        text-align: center;
    }

    /* Estilize sua tabela aqui */
    table {
        width: 40%;
        border-spacing: 10px;
        background-color: #262bcf;
        margin: 0 auto;
        margin-top: 100px;
        border-radius: 5px;

    }

    th {
        background-color: #57afcf;
        text-align: center;
        border-radius: 5px;
    }

    td {
        text-align: center;
    }

    a:hover {
        color: #57afcf;
        text-decoration: none;
        text-decoration: underline;
    }
</style><br>
<?php
require_once "delete_aluno.php";

?>

<a href="site.php"><input type="submit" value="Volte aos conteúdos"></a>