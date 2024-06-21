<?php
session_start();
require("logica-aut.php");
require "cabecalho.php";
require "conexao.php";
if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona("index.php");
    die();
}

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "select * from Candidato where id = 1";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$candidato = $stmt->fetch();

?>

<h2 class="text-center mt-5">Registro de Candidato.</h2>

<form action="alterar-candidato.php" method="POST" class="me-4 ms-4 mt-2">

    <div class="row g-3">
        <div class="col-12">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $candidato['nome'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone 1:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" value="<?= $candidato['telefone1'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone 2:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" value="<?= $candidato['telefone2'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $candidato['CPF'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade" value="<?= $candidato['idade'] ?>">
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $candidato['bairro'] ?>">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="rua" class="form-label">Rua:</label>
                <input type="text" class="form-control" id="rua" name="rua" value="<?= $candidato['rua'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="numero" class="form-label">Número:</label>
                <input type="number" class="form-control" id="numero" name="numero" value="<?= $candidato['numero'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $candidato['cidade'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="cep" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?= $candidato['CEP'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $candidato['email'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" value="<?= $candidato['senha'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 ms-6">
                <label for="conf-senha" class="form-label">Confirmar Senha</label>
                <input type="password" class="form-control" id="conf-senha" name="conf-senha" onblur="verifica_senha()" value="<?= $candidato['senha'] ?>">
            </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Currículo:</label>
            <input class="form-control" type="file" id="formFile" value="<?= $candidato['curriculo'] ?>">
        </div>

    </div>
    <div class="row justify-content-md-center mt-2">
        <button class="w-50 btn btn-lg btnPrincipal mb-4 text-white" type="submit">Registrar</button>
    </div>
</form>




<?php

require "footer.php";
?>