<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="imagens\icone.png">
        <link rel="stylesheet" href="style.css">
        <style>
            .navbar{
                margin-bottom: 0;
            }
        </style>	
    </head>
    <body>
        <?php
            include 'conexao.php';	
            include 'nav.php';
            include 'cabecalho.html';
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 text-center">
                    <h2 class="rosa-escuro">Usuário ou senha incorreto</h2>
                    <a href="formlogin.php" class="btn btn-block btn-default rosa-escuro" role="button">Tentar Novamente</a>
                    <a href="formusuario.php"><button type="button" class="btn btn-lg btn-link semdetalhe rosa-escuro">Ainda não sou cadastrado</button></a>
                </div>
            </div>
        </div>
        <?php include 'rodape.html' ?>
    </body>
</html>