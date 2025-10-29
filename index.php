<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Conserto para Eletrodomésticos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select, textarea, button {
            width: 100%;
            margin-top: 5px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2>Agendamento de Conserto</h2>

<form action="agendamento.php" method="POST">

    <label>Nome do Cliente:</label>
    <input type="text" name="nome" required>

    <label>Telefone do Cliente:</label>
    <input type="tel" name="telefone" required>

    <label>Tipo de Aparelho:</label>
    <select name="aparelho" required>
        <option value="">Selecione</option>
        <option value="Geladeira">Geladeira</option>
        <option value="Micro-Ondas">Micro-ondas</option>
        <option value="Fogão">Fogão</option>
    </select>

    <label>Data Preferida para o Atendimento:</label>
    <input type="date" name="data" required>

    <label>Descrição do Problema:</label>
    <textarea name="descricao" rows="4" required></textarea>

    <button type="submit">Enviar Agendamento</button>

</form>

</body>
</html>
