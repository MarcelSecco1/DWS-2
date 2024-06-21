<?php
session_start();
require("logica-aut.php");
if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona("index.php");
    die();
}


require "conexao.php";

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);


$sql = "delete from pessoas where id = ?";

try{
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute([$id]);

}catch(Exception $e){
  $error = $e;

}



if ($result == true) {
    $_SESSION["result"] = true;
    redireciona("listagem.php");
    $_SESSION["msg"] = "Excluído corretamente";

} else {
    $_SESSION["result"] = false;
    $_SESSION["msg"] = $error;
    redireciona("listagem.php");

}



?>