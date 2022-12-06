<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Check-Out</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <script src="jquery.mask.min.js"></script>
    <link rel="icon" href="imagens\icone.png">


<script>
	$(document).ready(function(){
		$('#cpf').mask('999.999.999-99', {placeholder: '___.___.___-__'})
	})

</script>

    <style>
        .navbar{
            margin-bottom: 0;
        }

        *,
         :after,
         :before {
            box-sizing: border-box
        }
    
        a {
            color: inherit;
            text-decoration: none
        }
        
        .container {
            width: 100%;
            margin: auto;
            margin-top: 5%;
            max-width: 525px;
            min-height: 670px;
            position: relative;
            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
        }
        
        .login-container {
            width: 100%;
            height: 100%;
            position: absolute;
            padding: 90px 70px 50px 70px;
            background: #131315;
        }
    
        .login-container .item,
        .login-form .group .label,
        .login-form .group .btn {
            text-transform: uppercase;
        }
        
        .login-container .item {
            font-size: 22px;
            margin-right: 15px;
            padding-bottom: 5px;
            margin: 0 15px 10px 0;
            display: inline-block;
            border-bottom: 2px solid transparent;
            cursor: pointer;
        }
        
        
        .login-form .group {
            margin-bottom: 15px;
        }
    
        .btn {
            cursor: pointer;
        }
        
        .login-form .group .input,
        .login-form .group .btn {
            border: none;
            padding: 15px 20px;
            border-radius: 25px;
            background: rgba(255, 255, 255, .1);
        }
    
        
        .login-form .group .label {
            color: #aaa;
            font-size: 12px;
        }
        
        .login-form .group .btn {
            background: #ce992f;
        }
        
        .hr {
            height: 2px;
            margin: 60px 0 50px 0;
            background: rgba(255, 255, 255, .2);
        }
        
    </style>
</head>
<?php
            include 'conexao.php';	
            include 'nav.php';
            
            
        ?>
<body>
<div class="container">
        <h1 style="text-align:center;"><mark style="background-color:#ce992f; border-radius:15px;">Check-Out</mark></h1></br>
        <h2 style="text-align:center;"><mark style="background-color:#ce992f; border-radius:15px;">Preencha os dados:</mark></h2>
            <form name="Formchekin" method="post" action="FazerChekout.php">
                <div class="form-group">
                </br>
                    <label for="txtnome">Nome</label>
                    <input name="txtnome" type="text" class="form-control" required id="string">
                </div>
    </br>
                <div class="form-group">
                    <label for="txtcpf">Número de identidade</label>
                    <input name="txtcpf" type="text" class="form-control" required id="cpf">
                </div> 
                </br>
                <div class="form-group">
                    <label for="txtcod">Código da Reserva</label>
                    <input name="txtcod" type="text" class="form-control" required id="string">
                </div>
                </br>
                <div class="form-group">
                    <label for="txtdata">Data de Nascimento</label>
                    <input name="txtdata" type="date" class="form-control" required id="data">
                </div>
                </br>
                <button type="submit" class="btn btn-lg btn-default">
                    <span class="glyphicon glyphicon-pencil"> Fazer Check-out </span>
                </button>
            </form>
        </div>
        </br>
</body>
</html>
<?php
include 'rodape.html'
?>
