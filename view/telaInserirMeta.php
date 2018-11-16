<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Inserir Meta</title>
</head>
<body>
    <div class="container">
    <form action="../controller/inserirMeta.php" method="post">
        <p>Usuário</p>
        <select name="cpf">
            <?php
            include_once('../model/usuariodao.php');
            include_once('../model/usuario.php');
            $dao = new UsuarioDao();
            $usuarios = $dao->lista();
            foreach ($usuarios as $usuario) {
                $cpf = $usuario->getCpf();
                $nome = $usuario->getNome();
                echo "<option value=\"$cpf\">$nome</option>";
            }
            ?>
        </select>
        <p>Nome</p>
        <input type="text" name="nome"><br>
        <p>Descrição</p>
        <textarea name="descricao" cols="30" rows="10"></textarea><br>
        <p>Prioridade</p>
        <select name="prioridade">
            <option value="1">Muito baixa</option>
            <option value="2">Baixa</option>
            <option value="3">Média</option>
            <option value="4">Alta</option>
            <option value="5">Muito alta</option>
        </select>
        <button type="submit">Enviar formulário</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>