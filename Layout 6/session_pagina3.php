<?php
session_start();
if(!isset($_SESSION["email"]) || empty($_SESSION["email"])){
    $_SESSION["restrito"] = true;
    header("Location: index.php");
    exit;
};
$titulo_pagina = "Página de sessões da Página 3.";
require "cabecalho.php";

?>

<h2>Página de sessões da Página 3.</h2>
<br>
<h2>Página de sessões da Página 3.</h2>
<br>
<p>Exemplo que quebra apenas uma variável </p>


<?php
unset($_SESSION["nome"]);
    echo "<p> ". $_SESSION["nome"]."</p>";
    echo "<p> ". $_SESSION["email"]."</p>";
require "rodape.php";

?>