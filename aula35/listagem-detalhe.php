<?php
session_start();
require("logica-aut.php");
require "conexao.php";

if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona("index.php");
    die();
}

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$sql = "select nome,urlfoto,sobre from pessoas where id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$pessoa = $stmt->fetch();

$titulo_pagina = "Detalhe de " . $pessoa['nome'];


require "cabecalho.php";

?>
<style>
    p {
        text-indent: 1.5em;
        text-align: justify;
        line-height: 1.7;
        font-size: 1.3em;
    }
</style>

<div class="container">
    <h4 class="me-4"><?= $pessoa['nome'] ?></h4>
    <img class="rounded float-end m-4" src="<?= $pessoa['urlfoto'] ?>" alt="<?= $pessoa['nome'] ?>">
    <p><?= $pessoa['sobre'] ?></p>
    <a href="listagem.php" class="w50 btn btn-primary mb-5 mt-4"><span data-feather="back"></span>Voltar para Listagem</a>

</div>

<?php



require "rodape.php";

?>