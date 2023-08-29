<?php

    
    echo "Q9. Ok! 
    Como eu auxiliei nessa questão, experimente implementar com outros elementos de logica, como for e array. \n";

    $termo_final = readline("Escreva o termo final de Fibbonacci: ");
    $primeiro = 0;
    $segundo = 1;
    $cont = 0;
    $soma = 0;
    echo $primeiro . ", " . $segundo . ", ";

    while ($cont != $termo_final):

        echo $primeiro + $segundo. ", ";
        $soma = $primeiro + $segundo;
        $primeiro = $segundo;
        $segundo = $soma;
        $cont++;

    endwhile;

?>