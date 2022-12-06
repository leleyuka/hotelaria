<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Avandra - ADM</title>  
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="imagens\icone.png">
    <style>
        .navbar{
            margin-bottom: 0;
        }

        .button{
            width:100%;
            background-color:#ce992f;
            color:black;
            padding:10px;
        }

        .button1{
            width:100%;
            background-color:#bb0a1e;
            color:black;
            padding:10px
        }

    </style>
</head>

<body>
	
<?php
	
	session_start();
	
    if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1) {
        header('location:index.php');
    }

    include 'nav.php';
	include 'conexao.php';	
	
	
?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
</br>
				<h2><mark style="background-color:#ce992f; border-radius:15px;">Área administrativa</mark></h2>
</br>
</br>
				
				<a href="formChekin.php">			
                    <button type="submit" class="button">Fazer Chek-in</button>
				</a>
				
				<a href="formCheckout.php">
                    <button type="submit" class="button">Fazer Check-out</button>
				</a>
                
                <a href="GerenciaReservas.php">
                    <button type="submit" class="button">Gerenciar reservas</button>
                </a>
			
				<a href="sair.php">
                    <button type="submit" class="button1">Sair da àrea administrativa</button>
				</a>
			</div>
		</div>
	</div>
</br>
</br>
	<?php include 'rodape.html' ?>
	
</body>
</html>