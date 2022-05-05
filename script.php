<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// var_dump($nome);
// var_dump($idade);

if(empty($nome) || empty($idade)){
    echo 'O campo não pode estar vazio';
    return;
}
if(strlen($nome) < 3){
    echo 'O nome deve conter mais de 2 caractéres';
    return;
}
if(strlen($nome) > 40){
    echo "O nome é muito extenso";
    return;
}
if(!is_numeric($idade)){
    echo "O valor que você colocou não é um número";
    return;
}


if($idade >= 6 && $idade <=  12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
            echo 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i];
    }
}
else if($idade >= 13 && $idade <=  18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescente')
            echo 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i];
    }
}
else if($idade > 18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
            echo 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i];
    }
}