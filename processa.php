<?php
session_start();
include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$estiloJogo = filter_input(INPUT_POST, 'select', FILTER_SANITIZE_STRING);

//-----------------------------
$classe = filter_input(INPUT_POST, 'classe', FILTER_SANITIZE_STRING);
//------------------------------

$nomeJogo = filter_input(INPUT_POST, 'nomeJogo', FILTER_SANITIZE_STRING);

$caracteristica = filter_input(INPUT_POST, 'caracteristica', FILTER_SANITIZE_STRING);

$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

$barra = filter_input(INPUT_POST, 'range', FILTER_SANITIZE_STRING);


//escreve na tela quais valores foram inputados
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Estilo de jogo: $estiloJogo <br>";
echo "Classe: $classe <br>";
echo "Nome do Jogo: $nomeJogo <br>";
echo "Caracteristica: $caracteristica <br>";
echo "Mensagem: $mensagem <br>";
echo "Barra: $barra <br>";


//QUERY BD
$result_dados = "INSERT INTO dados (nome, email, estiloJogo, classe, nomeJogo, caracteristica, mensagem, barra, dataInclusao)
    VALUES ('$nome', '$email', '$estiloJogo', '$classe', '$nomeJogo', '$caracteristica', '$mensagem', '$barra', NOW())";

$resultado_dados =  mysqli_query($conn, $result_dados);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!!</p>";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado!!</p>";
    header("Location: index.php");
}