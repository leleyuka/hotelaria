<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="imagens\icone.png">
        <style>
        .navbar{
            margin-bottom: 0;
        }
        a{
            color:#393a3c;
        }
        </style>
    </head>
    
    <body style="background-image: linear-gradient(to right,#161618,#393a3c,#161618); font-family: 'Times New Roman', Times, serif;">
        <?php
            include 'conexao.php';	
            include 'nav.php';
        ?>
        <br/><br/><br/><br/><br/>
        <div class="container-fluid" style="color:white;">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h2>Login</h2>
                    <form name="formusuario" method="post" action="validausuario.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="txtemail" type="email" class="form-control" required id="email">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input name="txtsenha" type="password" class="form-control" required id="senha">
                        </div>
                        <button type="submit" class="btn btn-lg btn-default">
                            <span class="glyphicon glyphicon-ok" class="rosa-escuro"> Entrar</span>
                        </button>
                        <a href="formusuario.php"><button type="button" class="btn btn-lg btn-link">Ainda não sou cadastrado</button></a>
                    </form>
                </div>
            </div>
        </div>
            <?php include 'rodape.html' ?>
    </body>
</html>