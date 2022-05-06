<?php

session_start();

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
    $_SESSION['mensagem-de-erro'] = 'O campo não pode estar vazio';
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 2 caractéres';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = "O valor que você colocou não é um número";
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = "O nome é muito extenso";
    header('location: index.php');
    return;
}
else{
    $_SESSION['mensagem-de-erro'] = "";
}


if($idade >= 6 && $idade <=  12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i];
            header('location: index.php');

    }
}
else if($idade >= 13 && $idade <=  18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescente')
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i];
            header('location: index.php');

    }
}
else if($idade > 18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
           $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i];
           header('location: index.php');

    }
}