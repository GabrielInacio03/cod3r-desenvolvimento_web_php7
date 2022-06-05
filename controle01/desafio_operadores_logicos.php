<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Desafio
    Dois trabalhos -> terça e quinta!
    - Se os dois trabalhos forem executado -> TV 50 e Sorvete
    - Se apenas um for executado -> TV 32 e Sorvete
    - Se nunhum for executado -> Fica em casa
-->


<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php

    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    if(!$t1 && !$t2){
        echo 'fica em casa';
    } else if(!$t1 || !$t2){
        echo 'TV 32 e Sorvete';
    } else{
        echo 'TV 50 e Sorvete';
    }


