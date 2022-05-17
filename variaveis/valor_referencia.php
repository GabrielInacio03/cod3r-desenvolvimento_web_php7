<div class="titulo">Valor Vs Referência</div>

<?php

    $variavel = 'valor inicial';    

    $variavelValor = $variavel; // dois espaços de memoria com o mesmo conteudo. É uma atribuição por valor

    echo $variavel;
    echo '<br>'. $variavelValor;

    //atribuição por referência
    $valorReferenciado = &$variavel; //o mesmo endereço de memória

    $valorReferenciado = 'mesma referência';

    echo '<br> $valorReferenciado = '. $valorReferenciado;
    echo '<br> $variavel = '. $variavel;