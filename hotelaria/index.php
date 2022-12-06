<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel Avandra</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="imagens\icone.png">
        <style type="text/css">
            .navbar{
                margin-bottom: 0;
            }
            a{
                color:#393a3c;
            }
            
            .disabled {
             opacity: 0.6;
             cursor: not-allowed;
            }

            .rev{
                background-color: gray;
                border-radius: 6px;
                padding: 10px;
                overflow: hidden;
                transition: 1.6s;
                transform: translate(0);
            }

            .rev:hover{
                color: #ce992f;
            }

            .rev p{
                margin: 0;
            }

            .rev::before {
                content:"";
                position: absolute;
                top: -75%;
                left: -45%;
                z-index: -1;
                background-im: linear-gradient(to right,#0000FF,#Add8e6
                    );
                border-radius: 54%;
                width: 200px;
                height: 200px;
                transition: 1.6s;
            }

            .rev:hover::before{
                transform: scale(4.5);
            }

            

        </style>
    </head>
    <body class="text-light" style="background-image: linear-gradient(to right,#161618,#393a3c,#161618); font-family: 'Times New Roman', Times, serif;">
        <?php 
            session_start();
            include 'conexao.php';
            include 'nav.php';
            include 'cabecalho.html';
            $consulta = $cn->query('select * from vw_quartos');
        ?>

        <div class="text-left" style="width:80%; margin-left:10%; color:white; text-shadow: 0.1em 0.1em 0.2em black; font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
            <h2 style="color:#ce992f;text-align:center;font-size:25px">Avandra Hotel e Club de Praia: Tipos de hospedagens</h2>
            <div class="rev">
            <h1>Introdução:</h1>
            <p style="font-size:23px;">O Avandra Hotel foi desenvolvido por uma equipe que visa agradar a todo tipo de clientela, desde as diversas nacionalidades, pessoas, costumes,
                agregamos com o nosso cliente, queremos sua confortabilidade em relaçao ao nosso local.
            </p>
    
        </div>   
        </div>
         
        <br/>
        <div class="container-fluid">
            <div class="row rosa-escuro text-center">
                <?php while($exibir = $consulta->FETCH(PDO::FETCH_ASSOC)){?>
                <div class="col-sm-8 secao" style="margin-left:17.5vw; padding-top:1.5vw; border: 1; border-style:solid; border-color:black; border-radius:10px;">
                    <img src="imagens/<?php echo $exibir['ds_imagem']; ?>" class="img-responsive" style="width:100%; border-radius:10px;">
                    <div><h3 style="color:white; text-shadow: 0.1em 0.1em 0.2em black;"><?php echo mb_strimwidth ($exibir['nm_categoria'],0,25,'...'); ?></h3></div>
                    <div class="text-center">
                        <a href="detalhes.php?cd=<?php echo $exibir['cd_quarto']; ?>">
                            <button class="btn btn-lg btn-block" style="background-color:#fff;"><span class="glyphicon glyphicon-info-sign"> Detalhes</span></button>
                        </a>
                    </div>
                    <?php if($exibir['no_disponibilidade'] > 0){ ?>
                    <div class="text-center">
                        <a href="Reserva.php?cd=<?php echo $exibir['cd_quarto']; ?>">
                            <button class="btn btn-lg btn-block" style="background-color: #ce992f;"><span class="glyphicon glyphicon-usd"> Reservar</span></button><br/>
                        </a>
                    </div>
                    <?php } else{ ?>
                    <div class="text-center">
                        <button class="btn btn-lg btn-block disabled" style="background-color:#8B0000; color:white;"><span class="glyphicon glyphicon-remove-circle"> Indisponível</span></button><br/>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php include 'rodape.html'; ?>
    </body>
</html>