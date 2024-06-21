<?php
session_start();
require("logica-aut.php");
$titulo_pagina = "Exemplo de página Inicial";
require "cabecalho.php";


?>


<h3>Olá essa é minha página Inicial.</h3>
<?php
if (!autenticado()) {
    echo "<p class=fs-5> Seja bem vindo a minha página!! para ter acesso as outras acesse:";
?>
    <a href="formulario-login.php">Atenticar</a>
<?php
} else {
?>
    <p class="fs-5">Queremos lhe desejar boa sorte e boas-vindas, que você obtenha muito sucesso nessa nova fase de sua vida. Conte conosco para tudo o que precisar! É com muita alegria e de braços abertos que hoje recebemos você! Esperamos que esta se torne na sua casa por muitos anos.</p>
<?php
}
if (isset($_SESSION["restrito"]) && $_SESSION["restrito"]) {
?>
    <br>
    <div class="alert alert-danger" role="alert">
        <h4> Você precisa está logado para ter acesso. </h4>

    </div>

<?php
    unset($_SESSION["restrito"]);
}

require "rodape.php";

?>