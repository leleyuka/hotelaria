<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Área Usuário</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" href="imagens\icone.png">
	<style>
	
	.navbar{
		margin-bottom: 0;
	}
	
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();

        if (empty($_SESSION['ID'])) { 
        header("location:formlogon.php");
        }
        include 'conexao.php';	
        include 'nav.php';

        
        $cd_Usuario = $_SESSION['ID'];
        $consultaVenda = $cn->query("select * from vw_quartos where cd_ = '$cd_Usuario' group by no_ticket")
	?>
	
<div class="container-fluid text-center">
	
    <div class="row" style="margin-top: 15px;">
        <h1 class="text-center">Minhas reservas</h1>
    </div>
	<div class="row" style="margin-top: 15px;">
		<div class="col-sm-1 col-sm-offset-1"><h4>Data</h4></div>
		<div class="col-sm-2"><h4>Ticket</h4></div>
	</div>		
	
    <?php while($exibeVenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"> <?php echo date('d/m/Y', strtotime($exibeVenda['dt_venda']));?> </div>
		<div class="col-sm-2"><a href="ticket.php?ticket=<?php echo $exibeVenda['no_Ticket'];?>"><?php echo $exibeVenda['no_Ticket']; ?></a></div>
	</div>	
    <?php } ?>
	
</div>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>