<?php
session_start();
require("logica-aut.php");



require "conexao.php";

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");

$senha_hash = password_hash($senha, PASSWORD_BCRYPT);

$sql = "insert into usuarios (nome, email, senha) values (?, ?, ?)";

try {
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute([$nome, $email, $senha]);
} catch (Exception $e) {
  $error = $e;
}


if ($result == true) {
  $_SESSION["result"] = true;
  redireciona("formulario-login.php");

} else {
  $_SESSION["result"] = false;
  $_SESSION["msg"] = $error;
  redireciona("formulario-login.php");

}
?>


