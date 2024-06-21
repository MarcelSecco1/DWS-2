<?php
session_start();

if(empty($_SESSION["email"])){
    $_SESSION["restrito"] = true;
    header("Location: index.php");
    exit;
}

$titulo_pagina = "Página 3 exemplo de sessões";
require "cabecalho.php";

?>
<h2>Página 3 de exemplo de sessões que apagam somente uma variável</h2>

<br>
<p>
    Página que APAGA a variável de sessão NOME usando o comando unset($_SESSION["nome"]);
</p>
<?php

unset($_SESSION["nome"]);

require "rodape.php";


?>