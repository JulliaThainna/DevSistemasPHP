<?php 
    $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
    $mesEscolhido = $_POST["mes"];

    if($mesEscolhido > 12){
        echo "Não existe mês correspondente para o número informado!";
    }
    else {
        echo $meses[$mesEscolhido-1];
    }
?>