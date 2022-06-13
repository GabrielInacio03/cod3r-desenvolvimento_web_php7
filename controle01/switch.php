<div class="titulo">Switch</div>

<?php

    // O switch, diferente do if, não recebe como valor um valor verdadeiro ou falso, ele recebe um valor e vai procurar qual case bate com ele.

   
    $categoria = 'Luxo';
    $preco = 0.0;
    $carro = '';

    switch (strtolower($categoria)) {
        case 'luxo':
            $carro = 'Mercedes';
            $preco = 250000;
            break;
        case 'suv':            
            $carro = 'Renegade';
            $preco = 800000;
            break;
        case 'etios':
            $carro = 'Etios';
            $preco = 55000;            
        default:
            $carro = 'Mobi';
            $preco = 33000;
            break;        
    }

    //formatando valores;
    $precoFormatado = number_format($preco, 2, ',', '.');

    echo '<br>';
    echo 'Carro: '. $carro;
    echo '<br>';
    echo 'Preço: '. $preco;

    