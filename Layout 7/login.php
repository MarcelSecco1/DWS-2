<?php
session_start();
require("logica-aut.php");

if(autenticado()){
    redireciona("index.php");
    die();
}

require "conexao.php";


$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");



$sql = "select nome, senha from usuarios where email = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$email]);
$row = $stmt->fetch();

if (!empty($row["senha"])) {
    if (password_verify($senha, $row["senha"])) {
        //senha ok
        $_SESSION["email"] = $email;
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["usuario_result"] = true;
        redireciona("index.php");

    

    } else {
        //senha errada
        $_SESSION["usuario_result"] = false;
        $_SESSION["erro"] = "Senha incorreta!";
        redireciona("formulario-login.php");
   
    }
} else {
    $_SESSION["usuario_result"] = false;
    $_SESSION["erro"] = "Nenhuma usuário encontrado com esse email!";
    redireciona("formulario-login.php");
    
}






?>