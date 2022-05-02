<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE;
    echo '<br>';
    echo FALSE;

    echo '<br>'. var_dump(true);
    echo '<br>'. var_dump(false);

    //conseguimos converter outros tipos para boolean
    echo '<br>'. is_bool(false); //verificar se o valor é boolean

    //Regras de Conversão
    echo '<p>Regras</p>';
    echo '<br>'. var_dump((bool) 0); //0=false e outro numero=true
    echo '<br>'. var_dump((bool) 5); 
    echo '<br>'. var_dump((bool) ""); //false
    echo '<br>'. var_dump((bool) " "); //true
    echo '<br>'. var_dump((bool) "0"); //false
?>