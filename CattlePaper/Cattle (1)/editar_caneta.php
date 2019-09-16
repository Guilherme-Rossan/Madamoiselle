<?php

    include 'db.php';

    $caneta_edita = $_POST['caneta_edita'];
    $nome_caneta = $_POST['nome_caneta'];
    $tipo_caneta = $_POST['tipo_caneta'];
    $preco = $_POST['preco'];

  
    $query = " UPDATE caneta SET nome_caneta = '$nome_caneta', tipo_cor = '$tipo_caneta', preco=$preco WHERE id_caneta=$caneta_edita;";
    $pato = mysqli_query($conexao,$query) or die ('Não atualizou');

    header('location: Caneta.php');