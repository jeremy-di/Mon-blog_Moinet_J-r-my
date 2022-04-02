<?php
    require 'partials/header.php';
    require 'functions.php';
?>

<main id="contenu_dice">
    <div class="dice_body">
        <div class="horus">
            <img src="./images/horus.png" alt="">
        </div>
        <div class="ra">
            <img src="./images/ra.png" alt="">
        </div>
        <div class="anubis">
            <img src="./images/anubis.png" alt="">
        </div>
    </div>

    <div class="number_dice">
        <h1><?=rand(1,29)?></h1>
    </div>
    <div class="reload">
        <a href="lucky_dice.php">Relancer le dé</a>
    </div>
</main>

<?php
    require 'partials/footer.php';
?>