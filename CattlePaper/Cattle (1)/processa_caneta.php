<?php
    include 'db.php';
    $idcaneta = $_POST['idcaneta'];

    $query = "DELETE FROM caneta where id_caneta=$idcaneta;";
    $pato = mysqli_query($conexao,$query) or die('NAO DELETA');
        header('location: Caneta.php');

?>