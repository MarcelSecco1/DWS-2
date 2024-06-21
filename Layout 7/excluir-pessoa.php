<?php
session_start();
require("logica-aut.php");
if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona("index.php");
    die();
}


require "conexao.php";

 $id = filter_input(INPUT_GET, "id",FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "delete from pessoas where id= ?";
$stmt = $conn->prepare($sql);
$result = $stmt->execute([$id]);



if ($result == true) {
    $_SESSION["result"] = true;
    redireciona("listagem.php");
    $_SESSION["msg"] = "Dados Excluídos corretamente";

} else {
    $_SESSION["result"] = false;
    $_SESSION["msg"] = $error;
    redireciona("listagem.php");

}


?>