

<?php

    $lado1 = readline('Digite lado 1:');
    $lado2 = readline('Digite lado 2:');
    $lado3 = readline('Digite lado 3:');

    if(($lado1 > $lado3 + $lado2) || ($lado2 > $lado3 + $lado1) || ($lado3 > $lado1 + $lado2))
            echo "Não dá para formar um triangulo";

        else if ($lado1 + $lado2 >= $lado3){
            echo "Dá para formar um triângulo \n";

            if(($lado1 == $lado2) && ($lado2 == $lado3))
                echo "é um triangulo equilátero";
            
            else if(($lado1 == $lado2) || ($lado2 == $lado3) || ($lado1 == $lado3))
                echo "é um triangulo isóseles";

            else if(($lado1 != $lado2) || ($lado2 != $lado3) || ($lado1 != $lado3))
                echo "é um triangulo escaleno";
            
        }

?>