<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Cadastro dos Alunos</h1>    
    </header>
    <?php
        // Inclusão da página config.php a qual é responsavel pela conexão com o banco de dados
        include("config.php");

        // Declaração das variáveis que armazenam os dados enviados pelo formulário
        $nome = $_GET["nome"];
        $nascimento = $_GET["nascimento"];
        $matricula = $_GET["matricula"];
        $cpf = $_GET["cpf"];
        $ingresso = $_GET["ingresso"];
        $curso = $_GET["curso"];

        // Inserção dos dados no banco de dados
        $sql = "INSERT into alunos (nome, nascimento, matricula, ingresso, curso, cpf) 
        VALUES ('{$nome}', '{$nascimento}', '{$matricula}', '{$cpf}', '{$ingresso}', '{$curso}')";

        $res = $conexao->query($sql);

        echo "<p>$nome, seu cadastro foi efetuado com sucesso!</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>


</body>
</html>


