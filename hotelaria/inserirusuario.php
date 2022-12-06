<?php 
echo include 'conexao.php';

    $nome = $_POST['txtnome'];
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];


    /*echo $nome.'<br>';
    echo $email.'<br>';
    echo $senha.'<br>';
    echo $end.'<br>';
    echo $cidade.'<br>';
    echo $cep.'<br>';*/


        $incluir = $cn ->query("
            insert into tbl_usuario(nm_usuario,ds_email,ds_senha,ds_status)
            values('$nome','$email','$senha','0')
        ");
        header('location:ok.php');
    


?>