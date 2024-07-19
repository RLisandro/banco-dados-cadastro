<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha o ID do aluno do formulário
    $aluno_id = $_POST["aluno_id"];

    // Valide o ID (por exemplo, verifique se é um número inteiro positivo)

    // Conecte-se ao banco de dados (use suas configurações)
    require_once('config.php');

    // Execute a consulta de exclusão
    $comando_excluir = "DELETE FROM users WHERE id = $aluno_id";
    $resultado_excluir = mysqli_query($conn, $comando_excluir);

    if ($resultado_excluir) {
        echo "Aluno excluído com sucesso!";
    } else {
        echo "Erro ao excluir o aluno.";
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conn);
}
