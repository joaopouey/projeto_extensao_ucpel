<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <?php 
        $name = $_GET['nome'] ?? "Fulano de tal";
    ?>
    <section class="formulario">
        <img src="imagens/logo_ucpel.jpg" alt="Logo Ucpel">
        <h1>Cadastro de Alunos</h1>
        <form class="form_inside" action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <p>
                <label for="nome">Nome</label>
                <input type="text" style="width:400px" name="nome">
            </p>
            <p>
                <label for="cpf">CPF</label>
                <input type="number" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00" style="width:430px" name="cpf" >
            </p>
            <p>
                <label for="nascimento">Data de Nascimento</label>
                <input type="date" style="width:220px" name="nascimento">
            </p>
            <p>
                <label for="ingresso">Semestre/ano de ingresso</label>
                <input type="number" placeholder="00/0000" style="width:142px" name="ingresso">
            </p>
            <p>
                <label for="matricula">Número de matrícula</label>
                <input type="number" style="width:202px" name="matricula">
            </p>
            <p>
                <label for="curso">Curso</label>
                <input type="text" style="width:400px" name="curso">
            </p>
            <div style="text-align: center">
                <input class="submit_button" type="submit">
            </div>
        </form>
    </section>
    <div class="resposta">
        <h1>Bem vindo</h1>
        <?php 
            echo "<p>Bem vindo(a) $name, seu cadastro foi efetudo com sucesso!</p>"
        ?>
    </div>
</body>
</html>