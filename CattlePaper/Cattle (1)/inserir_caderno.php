<?php

include 'db.php';

$nome_caderno = $_POST['nome_caderno'];
$tipo_caderno = $_POST['tipo_caderno'];
$preco = $_POST['preco'];

$query="INSERT  INTO caderno (nome_caderno,tipo,preco) VALUES ('$nome_caderno','$tipo_caderno',$preco);";

$inserir = mysqli_query($conexao,$query) or die('nao foi inserido na tabela caderno');


header('location: Caderno.php');