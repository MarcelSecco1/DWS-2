<?php
session_start();
require("logica-aut.php");
$titulo_pagina = "Alterar Pessoa";
require "cabecalho.php";
require "conexao.php";

$id = filter_input(INPUT_GET, "idCandidato",FILTER_SANITIZE_SPECIAL_CHARS);

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$telefone1 = filter_input(INPUT_POST, "telefone1", FILTER_SANITIZE_NUMBER_INT);
$telefone2 = filter_input(INPUT_POST, "telefone2", FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_NUMBER_INT);
$rua = filter_input(INPUT_POST, "rua", FILTER_SANITIZE_SPECIAL_CHARS);
$numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_NUMBER_INT);
$bairro = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);

$sql = "update Candidato set 
    nome = ?, 
    telefone1  = ?,
    telefone2  = ?, 
    cpf  = ?, 
    rua  = ?, 
    numero  = ?, 
    bairro  = ?, 
    cep  = ?, 
    cidade  = ?,
    email  = ?,  
    idade = ?,
    curriculos = ?
    where idCandidato = ?";


try {
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$nome, $telefone1, $telefone2, $cpf, $rua, $numero, $bairro, $cep, $cidade, $email, $idade, $id]);
} catch (Exception $e) {
    $result = false;
    $error = $e->getMessage();
}
if ($result == true) {
    $_SESSION["result"] = true;

?>
    <script>
        alert("Usuário alterado corretamente!");
    </script>
    
<?php
   

} else {
    $_SESSION["result"] = false;
    $_SESSION["erro"] = $error;
    redireciona("index.php");
}



?>