<?php
// iniciando a sessão, pois precisamos pegar o cd do usuario logado para salvar na tabela de vendas no campo cd_cliiente
session_start();  

include 'conexao.php';


$data = date('Y-m-d');  // variavel que vai pegar a data do dia (ano mes dia -padrão do mysql)
$ticket = uniqid();  // gerando um ticket com função uniqid(); 	gera um id unico    
$cd_user = $_SESSION['ID'];  //recebendo o codigo do usuário logado, nesta pagina o usuario ja esta logado pois, em do carrinho de compra
$disp = ['no_disponibilidade'];
//// criando um loop para sessão carrinho q recebe o $cd e a quantidade
foreach ($_SESSION['carrinho'] as $cd => $qnt)  {
    $consulta = $cn->query("SELECT vl_reserva FROM tbl_quartos WHERE cd_quarto='$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    $preco = $exibe['vl_reserva'];
    
	
	$inserir = $cn->query("INSERT INTO tbl_reserva(no_reserva,cd_cliente,cd_quarto,qtd_quarto,vl_reserva,dt_reserva)  VALUES
	('$ticket','$cd_user','$cd','$qnt','$preco','$data')");

    $update = $cn->query("UPDATE tbl_quartos SET no_disponibilidade = '0' WHERE cd_quarto = '$cd'");
} 

include 'fim.php';?>