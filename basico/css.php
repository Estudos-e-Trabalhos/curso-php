<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
    echo 'Olá ';
    echo '<small> ';
    echo ' Mundo!';
    echo '</small>';
    ?>
</h1>



<div center><button><?= 'Aperte aqui' ?></button></div>

<style>
button {
    padding: 5px <?=2 * 10?>px;
    background-color: #4286f4;
    color: #EEE;
    border: none;
    border-radius: 10px;
    transition: 1s;
}

button:hover {
    background-color: #000;
}

[center] {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}
</style>