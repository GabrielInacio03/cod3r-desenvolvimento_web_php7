<div class="titulo">Operadores Relacionais</div>

<?php

    // = símbolo de atribuição
    // == símbolo de comparação
    // != , <> símbolo de diferente
    // === igualdade extrita, ou seja, vai comparar tanto o valor quanto o tipo


    //exemplos
    var_dump(1 == 1); // true
    echo '<br>';
    var_dump(1 <> 1); // false
    echo '<br>';
    var_dump(1 != 1); // false
    echo '<br>';


    //tipos diferentes
    var_dump(1 === '1'); //false, pois o tipo é diferente
    echo '<br>';
    var_dump(1 !== "1"); //true
    echo '<br>';

    echo '<p>Relacionais no IF/ELSE</p>';

    $idade = 25;
    if($idade < 18){
        echo "Menor de idade <br>";
    } else if($idade < 65){
        echo "Adulto<br>";
    } else {
        echo "Terceira Idade";
    }