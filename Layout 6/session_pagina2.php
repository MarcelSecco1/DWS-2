<?php
session_start();
if(!isset($_SESSION["email"]) || empty($_SESSION["email"])){
    $_SESSION["restrito"] = true;
    header("Location: index.php");
    exit;
};
 
$titulo_pagina = "Página de sessões da Página 2.";
require "cabecalho.php";

?>

<h2>Página de sessões da Página 2.</h2>

<p>Exemplo Usando session_start()</p>


<?php
    echo "<p> ". $_SESSION["nome"]."</p>";

require "rodape.php";

?>