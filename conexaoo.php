<?php
    $servidor = "localhost";
    $usuario = "student";
    $senha = "12345";
    $dbname = "sitepadarie";    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        echo "Conexao realizada com sucesso";
    }      
?> 