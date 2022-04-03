<?php

function return_attribut($array){
    include 'data/attributs.php';
    $attribut_id == $array[0];
    $points == $array [1];
    foreach ($attributs as $attribut){
        if($attribut_id == $attribut['id']){
            $str = $attribut ['name'].' '.'<span class="num_alpha">'.$points.'</span>';
            return $str;
        }
    }
    return false;
}

function return_competence($array){
    include 'data/competences.php';
    $competence_id == $array[0];
    $points == $array [1];
    foreach ($competences as $competence){
        if($competence_id == $competence['id']){
            $str = $competence ['name'].' '.'<span class="num_beta">'.$points.'</span>';
            return $str;
        }
    }
    return false;
}

function return_talent($array){
    include 'data/talents.php';
    $talent_id == $array[0];
    $points == $array [1];
    foreach ($talents as $talent){
        if($talent_id == $talent['id']){
            $str = $talent ['name'].' '.'<span class="num_alpha">'.$points.'</span>';
            return $str;
        }
    }
    return false;
}

function get_character_by_id($id){
    include 'data/character.php';
    foreach($characters as $value){
        if($value['id'] == $id){
            return $value;
        }
    }
    return false;
}

?>