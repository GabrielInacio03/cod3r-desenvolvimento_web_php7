<div class="titulo">Integração CSS</div>

<h1>
    <?php 
        echo 'Olá ';
        echo '<small>Mundo!</small>';
    ?>
</h1>

<?= "<div class='msg'>Outra forma de me 'expressar'!</div>" ?>

<style>
    .msg{
        padding: 5px <?= 2* 10 ?>px;
        background-color: #4286f4;
        color: #EEE;
    }
</style>