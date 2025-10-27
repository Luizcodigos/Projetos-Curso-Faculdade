<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        strong {
            color: #555;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultados</h1>

        <?php
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $turma = $_POST['turma'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];

        $media = ($nota1 + $nota2) / 2;

        if($media >= 6){
            $status = "Aprovado";
        } else {
            $status = "Reprovado";
        }

        echo "<p><strong>Nome: </strong>$nome</p>";
        echo "<p><strong>Idade: </strong>$idade</p>";
        echo "<p><strong>Turma: </strong>$turma</p>";
        echo "<p><strong>Nota 1: </strong>$nota1</p>";
        echo "<p><strong>Nota 2: </strong>$nota2</p>";
        echo "<p><strong>Média: </strong>$media</p>";
        echo "<p><strong>Status: </strong>$status</p>";
        ?>
    </div>
</body>
</html>
