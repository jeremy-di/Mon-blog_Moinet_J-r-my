<?php
    require 'partials/header.php';
    require 'functions.php';
?>

<main id="contenu_dice">
    <div class="dice_body">
        <div class="horus">
            <img src="./images/horus.png" alt="">
        </div>
        <a href="lucky_dice.php">
            <div class="number_dice">
                <h1><?=rand(1,29)?></h1>
                <p>Cliquer pour relancer le dé</p>
            </div>
        </a>
        <div class="anubis">
            <img src="./images/anubis.png" alt="">
        </div>
    </div>
</main>

<?php
    require 'partials/footer.php';
?>