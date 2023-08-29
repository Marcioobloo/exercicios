<?php
        
    //questão 1 / 7.1)

        echo "Q1. Vou avaliar por letras:\n

        Q1.a) Ok, poderia ser feito com 'max(array_name)';
        Q1.b) Ok, mesma lógica da Q1.a), 'min(array_name)';
        Q1.c) Ok!

        Q1.d) Não faz a operação. 
                Veja: Você precisa 'contar' uma coisa. Então você precisa criar uma variável que conte quantas vezes a operação acontece.
                Sempre que a condição for verdade, ele vai aumentar 1 unidade.
                Quando contar: Se lista[$i] é igual a lista[0] 
                Como contar:   $repeticao = $repeticao + 1     

        Q1.e) Ok!
                Contudo, não está preparado para caso o vetor mude de tamanho (número de  elementos != 14). 
                Tente fazer com isso.
                Desafio opcional: Fazer a soma sem o array_sum. Dica: um laço de repetição ('for' ou 'while').

        Q1.f) Laço infinito! Incorreto.
                Veja: O uso de dois Laços de repetição (for + while) causa esse comportamento.
                Exemplo:
                        Laço for($i = 0; $i < count($lista); $i++)              
                                Caso específico: $i = 1, lista[$i] = -2         
                                Enquanto (lista[$i] < 0)                        
                                        exibir soma da $lista inteira           

                Erros:                                                          
                1. O Enquanto (lista[$i] < 0) gera um laço infinito.            
                Se seu lista[$i] for -2 por exemplo, ele nunca vai sair do while. 

                2. O exibir soma da $lista não é a operação que a questão pede.
                Devem-se somar APENAS os números negativos.                     
                Como:                                                           
                        Variável nova: soma_negativos = 0;                      
                        Laço de repetição For                                   
                                Se(lista[$i] < 0)                               
                                                soma_negativos = soma_negativos + lista[$i]; 
                        Fim do For                                              
                        Exibir soma_negativos                                   

        \n";

        $lista = array(12, -2, 4, 8, 29, 45, 78, 36, -17, 2, 12, 8, 3, 3, -52);
        // sort($lista);
        // print_r($lista);

        // a) Max
                // echo $lista[14];

        // b) Min
                // echo $lista[0];

        // c) Números pares
                // for ($i = 0; $i < count($lista); $i++){
                        
                //         if($lista[$i] % 2 == 0){
                //         echo $lista[$i]. " é par, ";
                //         }

                // }

        // d) Repetições do elemento 1
                // for ($i = 0; $i < count($lista); $i++){

                //         if($lista[$i]){
                //                 echo "aqui está todas as vezes que o primeiro valor aparece: ". $lista[$i]. "\n";
                //         }
                // }

        // e) Média dos elementos
                // array_sum($lista) / 14;
                        
        // f) Soma dos elementos negativos
                // for ($i = 0; $i < count($lista); $i++)
                //         while ($lista[$i] < 0){
                //                 echo array_sum($lista);
                //         }

    //============================================================

    //questão 2 / 7.2)
    
    echo "Q2. Ok!
                Adicionei uma forma alternativa de fazer, combinando comandos.    
    \n";
//         $nome = readline("Insira seu nome aqui: ");
//         $sobrenome = readline("Insira seu sobrenome aqui: ");
//         $idade = readline("Insira sua idade aqui: ");

//         $a = array();

//         array_push($a, $nome, $sobrenome, $idade);

//         // $a2 = array($nome, $sobrenome, $idade);

//         print_r($a)

    //===============================================================

    //questão 3 / 7.3)

     
        echo "Q3. Ok!
    
        \n";    

        // $valor_um = readline("Insira o primeiro valor: ");
        // $valor_dois = readline("Insira o segundo valor: ");
        // $valor_três = readline("Insira o terceiro valor: ");
        // $valor_quatro = readline("Insira o quarto valor: ");

        // $a = array();

        // array_push($a, $valor_um, $valor_dois, $valor_três, $valor_quatro);

        // print_r($a);

        // echo "\n a média é ". array_sum($a) / 4

        

?>