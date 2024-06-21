<?php
session_start();
//Código para proteger uma página PHP;
if(!isset($_SESSION["email"]) || empty($_SESSION["email"])){
    $_SESSION["restrito"] = true;
    header("Location: index.php");
    exit;
};

$titulo_pagina = "Página de sessões da Página 1.";
require "cabecalho.php";

?>

<h2>Página de sessões da Página 1.</h2>

<p>Exemplo Usando session_start()</p>


<?php
    echo "<p> ". $_SESSION["nome"]."</p>";
    echo "<p> ". $_SESSION["email"]."</p>";

require "rodape.php";

?>