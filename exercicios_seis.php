<?php

$f = readline("escreva o final da linha: ");
$primeiro = 0;
$segundo = 1;
$cont = 0;
$soma = 0;


    while ($cont != $f):

        echo $primeiro + $segundo. ", ";


        // echo ",primeiro numero: ".$primeiro. ",segundo número: ". $segundo."\n";
        $soma = $primeiro + $segundo;
        $primeiro = $segundo;
        $segundo = $soma;
        $cont++;

    endwhile;

?>