<div class="titulo">Atribuições</div>

<?php
    //Atribuição simples

    $titulo = 'Atribuições';
    $numero = 10;
    echo '<br>'. $numero;

    //Atribuição com soma
    $numero = $numero - 1;
    echo '<br>'. $numero;

    //Atribuição com float
    $numero = $numero - 1.5; //mudei o tipo para float
    echo '<br>'. $numero;

    //Atribuição com incremento
    $numero--;
    //--$numero
    echo '<br>'. $numero; //7.5
    $numero++;
    
    $numero = 20;
    echo '<br>'. $numero;
    $numero -= 5;
    echo '<br>'. $numero;
    $numero += 5;
    echo '<br>'. $numero;
    $numero *= 10;
    echo '<br>'. $numero;
    $numero /= 2;
    echo '<br>'. $numero;
    $numero %= 6;
    echo '<br>'. $numero;
    $numero **= 4;
    echo '<br>'. $numero;
    $numero .= 4; // concatenacao
    echo '<br>'. $numero;

    $texto = 'Esse é um texto';
    $texto .= ' qualquer';
    echo '<br>'. $texto;

    $variavelInexistente = 'valor inexistente';
    echo '<br>'. $variavelInexistente;

    $valor = $variavelInexistente ?? 'valor default'; //?? => valor padrão caso o primeiro valor não exista

    echo '<br>'. $valor;
    