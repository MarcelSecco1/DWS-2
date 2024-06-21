<?php
session_start();
session_destroy();
$titulo_pagina = "Página de sessões de LOG-OUT.";
require "cabecalho.php";

?>


<h2>Página de sessões da Página 2.</h2>

<p>Exemplo Usando session_destroy()</p>


<?php
    echo "<p> ". $_SESSION["nome"]."</p>";
    echo "<p> ". $_SESSION["email"]."</p>";
require "rodape.php";

?>