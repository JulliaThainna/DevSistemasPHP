<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $total = $n1 + $n2;
    if($total > 10){
        $total += 8;
    }
    else{
        $total -= 5;
    }

    echo "$total";
?>