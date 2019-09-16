<?php

    include 'db.php';
    $caderno_edita = $_POST['caderno_edita'];
    $nome_caderno = $_POST['nome_caderno'];
    $tipo_caderno = $_POST['tipo_caderno'];
    $preco = $_POST['preco'];

    $query = " UPDATE caderno SET nome_caderno = '$nome_caderno', tipo = '$tipo_caderno', preco ='$preco' WHERE id_caderno=$caderno_edita;";
    $pato = mysqli_query($conexao,$query) or die ('Não atualizou');

    header('location: Caderno.php');