<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="imagens\icone.png">
    <title>Gerenciar Reservas</title>
    
</head>
<style>
    .container{
      padding-left:500px;
      padding-right:20px 
    }
</style>
<body>
    <?php 
        include 'conexao.php';
        
        $consulta = $cn -> query ('select * from tbl_reserva');
     ?>
     </br>
</br>
    
    <h1 style="text-align:center;"><mark style="background-color:#ce992f; border-radius:15px;">Gerenciar Reservas</mark></h1></br>
    <h2 style="text-align:center;"><mark style="background-color:#ce992f; border-radius:15px;">A tabela mostra todos os registros de reservas feitos através do site!</mark></h2></br>
</br>
<div class="container">
    <table style="border:1px solid black; text-align:center;width:50%;">
    <tbody>
                <tr>
                    <th>Código da Reserva</th>
                    <th>Código do Cliente</th>
                    <th>Quantidade de Quartos</th>
                    <th>Valor Reserva</th>
                </tr>
        <?php
            while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
        ?>

                <tr>
                    <td><?php echo $exibe ['no_reserva']?></td>
                    <td><?php echo $exibe ['cd_cliente']?></td>
                    <td><?php echo $exibe ['qtd_quarto']?></td>
                    <td><?php echo $exibe ['vl_reserva']?></td>
                </tr>
        <?php
            }
        ?>
    </tbody>           
    </table>
     </div>

</body>
</html>
