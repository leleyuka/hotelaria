<?php
    $servidor = "localhost";
    $usuario = "user";
    $senha = "1234567";
    $banco = "db_hotelaria";

    $cn = new pdo("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>