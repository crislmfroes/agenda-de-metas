<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Usuários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <div class="w-50 p-3">
                <ul class="list-group">
                    
                </ul>
            <?php
            include_once('../model/usuariodao.php');
            include_once('../model/usuario.php');
            function mostrarUsuario($usuario) {
                $nome = $usuario->getNome();
                $email = $usuario->getEmail();
                $cpf = $usuario->getEmail();
                return "<div class=\"row\">
                <div class=\"col\"><span>$nome</span></div>
                <div class=\"col\"><span>$email</span></div>
                <div class=\"col\"><span>$cpf</span></div>
              </div>";
            }
            $dao = new UsuarioDao();
            $usuarios = $dao->lista();
            foreach ($usuarios as $usuario) {
                echo mostrarUsuario($usuario);
            }
        ?>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

