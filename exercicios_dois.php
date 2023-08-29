<?php

    echo "Resolve, mas não está correto. Faltou um detalhe apenas: \n";
    echo "Atual:   0, PIN, 1, 2, 3, 4, PIN, 5... \n";
    echo "Correto: PIN, 1, 2, 3, PIN, 5, ... \n
    
    Logo, nos casos que o If é verdade, não deve aparecer o número. 
    
    Questão 2: Múltiplos 4 ou 10 (algoritmo)
    * Objetivo: imprimir de 0 a 40. Quando for múltiplo de 4 ou 10, imprimir PIN.

    * Início Algoritmo
    *
    * Laço for($i=0; $i<=40; $i++)
    *
    *   Se múltiplo de 4 ou 10:
    *       Imprime PIN
    *   Se não:
    *       Imprime $i
    * Fim for
    *
    * Fim Algoritmo 
    ";
    

for( $i=0; $i<=40; $i++ ){

    echo "$i, " ;

    if ($i%4 == 0 || $i%10 == 0){

        echo "PIN, " ;
    }
}

?>