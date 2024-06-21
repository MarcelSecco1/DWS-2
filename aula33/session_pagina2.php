<?php
session_start();

//CODIGO PHP para proteger uma página, só deve abrir SE FEZ LOGIN
if(empty($_SESSION["email"])){
    $_SESSION["restrito"] = true;
    header("Location: index.php");
    exit;
}

$titulo_pagina = "Página 2 exemplo de sessões";
require "cabecalho.php";


echo "<h2>Página 2 exemplo de sessões</h2>";

echo "<p>O nome é: ".$_SESSION ["nome"]."</p>";
echo "<p>O email é: ".$_SESSION ["email"]."</p>";

require "rodape.php";


?>