<div class="titulo">Conversões</div>

<?php

    echo is_int(PHP_INT_MAX); //1 => true

    //int para float
    echo '<p>Int para Float</p>';
    echo '<br>';
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0); //float 2
    echo '<br>';
    var_dump((float) 3); //conversao explicita

    //float para int
    echo '<p>Float para Int</p>';
    var_dump((int) 6.8);
    echo '<br>';
    var_dump(intval(2.8, 10)); //2 base 10
    echo '<br>';
    var_dump((int) round(2.8)); //arrendonda pra cima

    //Operações com string
    echo '<p>Strings</p>';
    var_dump(3 + "2"); //5
    echo '<br>';
    var_dump("3". 2); //string 32
    echo '<br>', is_string("3". 2); //1
    echo '<br>';
    var_dump(1 + "cinco");


    