<?php


    echo "Q5:Faltam DOIS detalhes! \n";
    echo "1. O resultado final é apenas a última potência \n";
    echo "2. O bloco de código faz a operação 1 vez a mais que o desejado. Ex.: 2³ = 16 \n";
    
    // // questão 5/5.1)

    // $base = readline('digite a base: ');
    // $expoente = readline('digite o expoente: ');

    // $resultado = 1;
    // $condicao = 0;

    // while($condicao <= $expoente){
    //     $condicao = $condicao + 1;
    //     $resultado = $resultado * $base;

    //     echo $resultado. "\n";


    // }
    

//    =================================================================================

    echo "Q6:OK! Fiz alterações curtas só para deixar mais limpo. \n";

    // // questão 6/5.2)

    // $i = readline("Informe número inteiro para calcularmos fatorial:");
    // $resultado = 1;

    // while ($i > 1):
    //     $resultado = $resultado * $i;
    //     $i--;
    // endwhile;
    
    // echo "Valor do resultado = ". $resultado. "\n";


//    =================================================================================

// 
    echo "Q7:Incompleto! Faltando laço externo para digitar repetidas vezes. \n";
    echo "Passo a passo lógico abaixo \n";

    /** 
     * Questão 7: Fatorial em Loop
     * 1. Digitar fatorial a calcular, N
     * 2. Loop de repetição: 
     *    2.1. Se (0 < N < 16): Repetir
     *    2.1.2. Calcula fatorial de N
     *    2.1.3. Digitar fatorial N novamente
     *    2.1.4. Volta para passo 2
     * 
     * 
     *    2.2. Se não:
     *      Informar valor inválido
     *      Parar execução
    */


    // // questão 7/5.3)
    // $i = readline("entre valor: ");
    // $resultado = 1;

    // while($i > 0 && $i <16){
    //     echo "Valor de i = ". $i. "\n";

    //     $resultado = $resultado * $i;
    //     echo "Valor do resultado = ". $resultado. "\n";
    //     $i--;
    // } 
    // echo "valor inserido não é permitido";



//    =================================================================================

    // questão 8/5.4)

    echo "Q8:Ok! \n";
 
        $numero_um = readline('Montar uma tabuada de: ');
        $comeco = readline('começar por: ');
        $termino = readline('Terminar em: ');

        $resultado = 1;

        while($comeco <= $termino){
            $resultado = $numero_um * $comeco;
            $comeco = $comeco + 1;

            echo $resultado. "\n";

        }

?>