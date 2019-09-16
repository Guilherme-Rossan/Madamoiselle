<?php
    include 'db.php';
    $idcaderno= $_POST['idcaderno'];

    $query = "DELETE FROM caderno where id_caderno=$idcaderno;";
    $pato = mysqli_query($conexao,$query) or die('NAO DELETA');
        header('location: Caderno.php');

?>