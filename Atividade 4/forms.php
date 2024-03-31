<?php 
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];

    echo "Nome: $nome / Gênero: $genero <br>";
    if($idade > 25){
        echo "Você pode se cadastrar!";
    }
    else{
        echo "Você não pode se cadastrar";
    }
?>