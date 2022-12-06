<?php 
include 'conexao.php';

    $nome = $_POST['txtnome'];
    $cod = $_POST['txtcod'];
    $cpf = $_POST['txtcpf'];
    $data = $_POST['txtdata'];

    
    $consulta = $cn->query("select no_reserva from tbl_reserva where no_reserva = '$cod'");
    if($consulta->rowCount() > 0){
        $incluir = $cn->query("insert into tbl_checkin(nm_usuario,no_identidade,dt_chekin)
        values('$nome','$cpf','$data')"); 
    }
    header('location:AutorizaEntrada.php');
?>