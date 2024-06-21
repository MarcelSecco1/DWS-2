<?php

session_start();
session_destroy();

$titulo_pagina = "Página de exemplo de sessões LOG-OUT";
require "cabecalho.php";
?>

<h2>Página de exemplo de sessões LOG-OUT</h2>

<br>

<p>Essa é a página que QUEBRA (ou FECHA) a sessão usando o comando session_destroy();</p>

<?php



echo "<p>O nome é: ".$_SESSION ["nome"]."</p>";
echo "<p>O email é: ".$_SESSION ["email"]."</p>";




require "rodape.php";


?>