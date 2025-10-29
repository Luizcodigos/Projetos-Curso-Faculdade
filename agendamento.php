<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $nome = htmlspecialchars($_POST["nome"]);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $aparelho = htmlspecialchars($_POST["aparelho"]);
    $data = htmlspecialchars($_POST["data"]);
    $descricao = htmlspecialchars($_POST["descricao"]);

    
    echo "<h2>Agendamento Confirmado!</h2>";
    echo "<p>Obrigado, <strong>$nome</strong>. Seu agendamento foi recebido com sucesso.</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Aparelho:</strong> $aparelho</p>";
    echo "<p><strong>Data do atendimento:</strong> $data</p>";
    echo "<p><strong>Descrição do problema:</strong><br>$descricao</p>";
    
echo "<br><a href='http://localhost/cadastro/index.php'>Voltar ao formulário</a>";

} else {
    
    echo "<p>Por favor, preencha o <a href='formulario.html'>formulário de agendamento</a>.</p>";
}
?>
