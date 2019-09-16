<?php

include 'db.php';

$nome_caneta = $_POST['nome_caneta'];
$tipo_caneta = $_POST['tipo_caneta'];
$preco_caneta = $_POST['preco_caneta'];

$query="INSERT  INTO caneta (nome_caneta,tipo_cor,preco) VALUES ('$nome_caneta','$tipo_caneta',$preco_caneta);";

$inserir = mysqli_query($conexao,$query) or die('nao foi inserido a caneta');


header('location: Caneta.php');