<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .navbar{margin-bottom: 0px;}
    </style>
    <title>Minha Loja</title>
</head>

<body>
    <?php 
          include 'nav.php';
          include 'conexao.php';

          $cat = $_GET['cat'];

          $consulta = $cn -> query ("select cd_quarto, nm_quarto, vl_reserva, ds_imagem, no_disponibilidade from vw_quartos where ds_categoria = '$cat' ");
    ?>
    

    <div class="container-fluid">
        <div class="row"><!--O bootstrap divide a tela em 12 colunas(esta indicando que vai utilizar 1 linha com 4 colunas)-->
        <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
            <div class="col-sm-3">
                <img src="imagens/<?php echo $exibe ['ds_imagem']; ?>"  class="img-responsive" style="width:100%">
                <div><h4><b><?php echo mb_strimwidth ($exibe ['nm_quarto'],0,25,'...'); ?></b></h4></div>
                <div><h5>R$<?php echo number_format ($exibe ['vl_reserva'],2,',','.'); ?></h5></div>
                
                <div class="text-center">
                    <a href="detalhes.php?cd=<?php echo $exibe['cd_quarto'];?>">
                        <button class="btn btn-lg btn-block btn-default">
                            <span class="glyphicon glyphicon-info-sign" style="color:cadetblue"> Detalhes</span>
                        </button>
                    </a>
                </div>

                <div class="text-center" style="margin-top:5px; margin-bottom:5px;">
                    <?php if($exibe ['no_disponibilidade'] > 0) { ?>
                    <a href="carrinho.php?cd=<?php echo $exibe['cd_qaurto'];?>">
                    <button class="btn btn-lg btn-block btn-info">
                        <span class="glyphicon glyphicon-usd"> Reservar essa Hospedagem</span>
                    </button>
                    </a>
                        <?php } else { ?>
                    <button class="btn btn-lg btn-block btn-danger" disabled>
                        <span class="glyphicon glyphicon-remove-circle"> Indisponível</span>
                    </button> 
                    
                    <?php } ?>

                </div>

            </div>
        <?php } ?>
        </div>
    </div>
    <?php include 'rodape.html' ?>
</body>
</html>


