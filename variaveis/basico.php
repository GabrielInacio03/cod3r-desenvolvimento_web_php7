<div class="titulo">Variáveis</div>

<?php

    $numeroA = 13;
    echo $numeroA, "<br>";
    var_dump($numeroA);

    echo "<br>";
    $a = 3; //atribuindo valor a variável
    $a += 1;
    
    $b = 16;

    $soma = $a + $b;
    echo $soma;
    //algumas coisas do php não são case sensitive.

    //verificar se uma variável esta setada
    echo "<br>";
    echo isset($soma); //1= sim, 0= nao

    unset($soma); //tirar o valor padrão

    //---
    echo "<br>";
    $variavel = 10;
    echo "<br>";
    $variavel = "Agora sou string";
    echo $variavel;

    //no php vocÊ pode atribuir tipos diferentes para uma variável

    //Nomenclatura no PHP
    $var = 'Valida';
    $var2 = 'Valida';
    $VAR3 = 'Valida'; 
    $_var_4 = 'Valida';
    //$5var = 'invalido';
    //$%var6 = 'invalido';
    //$var7% = 'invalido';

    //existem também variáveis pré definidas, exemplo o $_GET

    echo '<br>';
    var_dump($_SERVER["HTTP_HOST"]);