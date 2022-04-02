<?php
    require 'partials/header.php';
    require 'data/character.php';
?>

<main id="contenu_character">

<?php
    foreach($characters as $value):
?>

    <div class="character_list">
        <div class="photo">
            <img src="<?=$value['picture']?>" alt="">
        </div>
        <div class="name">
            <h2><?=$value['name']?></h2>
        </div>
        <div class="fonction">
            <h2><?=$value['fonction']?></h2>
        </div>
        <div class="age">
            <h2>Âge : <?=$value['age']?> ans</h2>
        </div>
        <div class="description">
            <h2><?=$value['description']?></h2>
        </div>
        <div class="link">
            <a href="#">Voir la fiche</a>
        </div>
    </div>

<?php
    endforeach;
?>

</main>

<?php
    require 'partials/footer.php';
?>