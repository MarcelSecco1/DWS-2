<?php
session_start();
require("logica-aut.php");
if (!autenticado()) {
  $_SESSION["restrito"] = true;
  redireciona("index.php");
  die();
}

require "conexao.php";

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$urlfoto = filter_input(INPUT_POST, "urlfoto", FILTER_SANITIZE_URL);
$sobre = filter_input(INPUT_POST, "sobre", FILTER_SANITIZE_SPECIAL_CHARS);


$sql = "update pessoas set nome = ?, urlfoto = ?, sobre = ? where id = ?";

try {
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute([$nome, $urlfoto, $sobre, $id]);
} catch (Exception $e) {
  $error = $e;
}

if ($result == true) {
  $_SESSION["result"] = true;
  redireciona("listagem.php");
  $_SESSION["msg"] = "Alterado corretamente";

} else {
  $_SESSION["result"] = false;
  $_SESSION["msg"] = $error;
  redireciona("listagem.php");

}



?>