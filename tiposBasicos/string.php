<div class="titulo">Tipo String</div>

<?php

    echo 'Eu sou uma string';
    echo '<br>';

    var_dump("Eu também");

    echo '<br>';

    //concatenação
    echo "Nós também". ' somos';
    echo '<br>', "também aceito", " virgulas"; //não e concatenacao

    echo '<br>';

    echo "'TESTE'";
    echo "<br>";
    echo '\'Outro teste\'';

    echo '<br>';

    print("função print");

    echo '<br>';
    // algumas funções
    echo '<br>'. strtoupper('maximizado');
    echo '<br>'. strtolower('MINIMIZADO');
    echo '<br>'. ucfirst('só a primeira letra');
    echo '<br>'. ucwords('todas as palavras');
    echo '<br>'. strlen('Quantas letras?');
    echo '<br>'. mb_strlen('Eu também', "utf-8"); //resolve os caracteres
    echo '<br>'. substr('Só uma parte mesmo', 7,6); //comencando do indice 7 e lendo 6 indices a partir dele
    echo '<br>'. str_replace('isso', 'aquilo', 'trocar isso'); //substituir palavras

