<?php

        $A = readline("Digite quantos litros de Álcool aqui: ");
        $G = readline("Digite quantos litros de gasolina aqui: ");
        $DescontoAme = (3 / 100) * $A;
        $DescontoAma = (5 / 100) * $A;
        $PrecoAme = ($A - $DescontoAme) * 3.45;
        $PrecoAma = ($A - $DescontoAma) * 3.45;
        $DescontoGme = (4 / 100) * $G;
        $DescontoGma = (6 / 100) * $G;
        $PrecoGme = ($G - $DescontoGme) * 4.53;
        $PrecoGma = ($G - $DescontoGma) * 4.53;

        if($A <= 20){
            echo "o preço que será pago vai ser:". $PrecoAme. "\n";
        } else if($A > 20){
            echo "o preço que será pago vai ser:". $PrecoAma. "\n";
        }

        if($G <= 20){
            echo "o preço que será pago vai ser:". $PrecoGme. "\n";
        } else if($G > 20){
            echo "o preço que será pago vai ser:". $PrecoGma. "\n";
        }
?>