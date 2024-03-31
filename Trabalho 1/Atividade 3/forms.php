<?php

    //Procurando sobre ordenação eu achei essa função do próprio PHP, como não há restrições na atividade
    //sobre utilizá-la, resolvi fazer o seu uso.
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $numeros = [$n1, $n2, $n3];
    rsort($numeros);
    
    echo "Ordenação decrescente: <br>";
    foreach ($numeros as $numero){
        echo "$numero  ";
    }
?>