
<nav class="navbar navbar-dark" style="background-color: #ce992f;">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon"></span>
                <span class="icon"></span>
                <span class="icon"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="imagens/logo.png" style="width:13vw;"></a>
        </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-size:19px;">
            <ul class="nav navbar-nav">
                <li><a href="index.php"> Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#"> Pacotes</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Quartos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="categoria.php?cat=Standard">Standard</a></li>
                        <li><a href="categoria.php?cat=Master">Master</a></li>
                        <li><a href="categoria.php?cat=Deluxe">Deluxe</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Reserva.php"><span class="glyphicon glyphicon-calendar"></span> Minhas reservas</a></li>
                <li><a href="#">&#128222; Contato</a></li>

                <?php 
                if(empty($_SESSION['ID'])){ ?>

                <li><a href="formlogin.php">&#128100; Login </a></li>
                <?php }
                else{
                    if($_SESSION['Status'] == 0){
                    $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]'");
                    $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                ?>
                <li><a href="areaUser.php"><span class="glyphicon glyphicon-user"> <?php echo $exibe_usuario['nm_usuario']; ?></a></li>
                <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair </a></li>
                <?php } else{ ?>
                    <li><a href="areaadm.php"><button class="btn btn-sm btn-danger">Bem-vindo, Administrador</button></a></li>
                    <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair </a></li>
                <?php } } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

