<div class="titulo">If_Else</div>

<?php
    //Os códigos php são organizados por sentenças de códigos, terminadas por ; . Alem de serem organizados por bloco de códigos { código php }

    if(true)
    {
        echo 'É verdadeiro';
        echo '<br>Fui impresso!!!';
    } else
    {
        echo 'É falso';
    }

    echo '<br>Fim.';

    echo '<br>';

    //else if
    echo '<br> ------------ <br> ELSE IF <br>';
    $valor = 0;
    if($valor == 0){
        echo 'Falso';
    }else if($valor == "0"){
        echo 'Também é falso';
    } else{
        echo 'Agora é verdadeiro';
    }

   // if(true)    
   //     echo 'É verdadeiro';
   // else
   //     echo 'É falso';


    