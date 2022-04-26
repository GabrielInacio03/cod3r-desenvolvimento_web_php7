<div class="titulo">Operações Aritméticas</div>

<?php

    echo 1 + 1,   '<br>';
    echo 1 - 2.5, '<br>';    
    echo 10 - 2,  '<br>';
    echo 2 * 5,   '<br>';
    echo 7 / 4,   '<br>';
    echo intdiv(7,4), '<br>'; //divisão de inteiros para não quebrar
    echo round(7 / 4), '<br>';//arredonda para cima
    echo 7 % 4, '<br>';
    //echo 7 / 0, '<br>'; ///valor INF (infinito)
    echo 4** 2, '<br>'; //exponenciação


    //Precedência de Operadores:
    // () => ** => / * % => + -

    echo '<p>-- Precedência --</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2 + 3) * 4) ** 2, '<br>';