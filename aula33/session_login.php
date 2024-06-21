<?php

session_start();

$titulo_pagina = "Página de exemplo de sessões LOG-IN";
require "cabecalho.php";


echo "";

$_SESSION["nome"] = "Maria Eduarda Iuga";
$_SESSION["email"] = "eduardaiuga@gmail.com";
?>

<h2>Página de exemplo de sessões LOG-IN</h2>

<br>
<p>
    Essa é a página que CRIA a sessão session_start();
</p>

<?php


require "rodape.php";


?>