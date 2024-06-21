<?php
session_start();
$titulo_pagina = "Página de sessões de LOG-IN.";
require "cabecalho.php";

$_SESSION["nome"] = "Marcel Secco"; 
$_SESSION["email"] = "marcel.s@aluno.ifsp.edu.br"; 

?>

<h2>Página de sessões de LOG-IN.</h2>
<p>Exemplo Usando session_start()</p>


<?php
    echo "<p> ". $_SESSION["nome"]."</p>";
    echo "<p> ". $_SESSION["email"]."</p>";

require "rodape.php";

?>