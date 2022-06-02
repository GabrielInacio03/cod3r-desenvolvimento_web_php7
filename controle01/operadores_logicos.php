<div class="titulo">Operadores Lógicos</div>
<!--
    É um elemento de ligação de palavras qe compõem um comando de pesquisa. É o operador lógico que indica paara o sistema a maneira como se quer que uma palavra esteja em relação à outra dentro do documento.
-->

<?php
    var_dump(true);
    echo '<br>';
    echo '<p>Operador Unário</p> <br>';
    echo 'NOT';
    var_dump(!true); //negacao lógica, se é verdadeiro passa a ser falço
    var_dump(!!true); //volta a ser verdadeiro

    echo '<hr>';

    echo "<p>Tabela Verdade 'AND' (E)</p>";
    var_dump(true && true); //se as duas condições forem verdadeiras
    var_dump(true && false); //false
    var_dump(false && true); //false
    var_dump(false && false); //false

    //Ou seja, apenas se todos os elementos forem verdadeiros que a saída será true

    //Podemos usar o AND ao invés do &&

    echo '<br>';
    echo '<hr>';

    echo "<p>Tabela Verdade 'OR' (OU)</p>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);

    //somente será falso quando os dois resultados forem falsos

    // em vez de utilizar || podemos utilizar o OR

    echo '<br>';
    echo '<hr>';

    echo "<p>Tabela Verdade 'XOR' (OU exclusivo)</p>";
    var_dump(true xor true); //false
    var_dump(true xor false); //true
    var_dump(false xor true); //true
    var_dump(false xor false);//false

    //só será verdadeiro se um dos dois forem verdadeiros, um ou outro