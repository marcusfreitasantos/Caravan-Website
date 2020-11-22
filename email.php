<?php


if(isset($_POST["email"]) && !empty($_POST["email"])){
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

$to = "marcusfreitasantos@gmail.com";
$subject = "Contato do Site Caravan";
$body = 
        "<img src=./img/caravan.svg>".
        "Nome: " . $nome . 
        " Email: " . $email . 
        " Mensagem: " . $mensagem;
$header = "From: contato@universitynet.com.br " . "Responder para: " . $email;

if(mail($to, $subject, $body, $header)){
    echo ("Email enviado com sucesso!");
}else{
    echo ("Email não enviado!");
}




}

?>