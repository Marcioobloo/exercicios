<?php

    echo "Incorreto! 
    O algoritmo gera sim os 100 lançamentos de dado, de 1 a 6, com sucesso.
    Porém, o algoritmo não retorna a contagem dos elementos. \n

    Questão 8: Lançamentos de Dado (algoritmo):

    * Início
    * 
    * Criar array para armazenar
    * Laço for($i = 1; $i <= 100; $i++)
    *        Variável lançamento dado (randômico, entre 1 e 6)
    *        Adicionar variável no array
    * Fim for
    * 
    * Criar array_2 para contar vezes que um número aparece
    * Laço for($d = 1; $d <= 6; $d++)       // Possíveis faces do dado, de 1 a 6

    *   Laço for($i=0; $i < 100; $i++)      // Total de lançamentos: 100
    *     Se ($d == $i)
    *       array_2[$d] = array_2[$d] + 1 
    *   Fim for                             // Após verificar as 100 posições 
    *
    *   Face $d aparece array_2[$d] vezes
    * Fim for                               // Verifica a próxima face do dado
    *
    * Exibe array_2 
    *
    * Fim

    * Na dúvida, substitua variáveis por números e leia novamente.
    * Usar echo também é muito importante para entender o que ocorre em cada etapa.

    * Tem outras formas de fazer também: 
    * 1. Na hora que rola o dado, verificar o número e 

    \n";


    $a = array();
    for ($i = 1; $i <= 100; $i++){

        array_push($a, rand(1,6));

    }
    print_r($a)

?>