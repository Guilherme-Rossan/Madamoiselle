<?php

 $servidor = 'localhost';
 $usuario = 'root';
 $senha= 'root';
 $database= 'papelaria';

 $conexao=mysqli_connect($servidor,$usuario,$senha,$database) or die('Falha ao conectar o banco');

 $query="SELECT * FROM caderno";
 $consulta_caderno = mysqli_query($conexao,$query);

 $query="SELECT * FROM caneta";
 $consulta_caneta = mysqli_query($conexao,$query); 

