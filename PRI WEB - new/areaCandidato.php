<?php
session_start();
require("logica-aut.php");
require "cabecalho.php";

if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona("index.php");
    die();
}

require "conexao.php";
$email = email_usuario();
$idsql = "select idCandidato from Candidato where email = ?";
$stmt = $conn->prepare($idsql);
$stmt->execute([$email]);
$id = $stmt->fetch();


$sql = "select * from Candidato where idCandidato = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id['idcandidato']]);
$candidato = $stmt->fetch();



?>

    <h2 class="text-center mt-5">Editar Candidato</h2>

<form action="alterar-candidato.php" method="POST" class="me-4 ms-4 mt-2">

    <div class="row g-3">
        <div class="col-12">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome"  value="<?= $candidato['nome'] ?>"  required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone 1:</label>
                <input type="text" class="form-control" id="telefone1" name="telefone1"  value="<?= $candidato['telefone1'] ?>" data-mask="(00) 00000-0000"  maxlength="15" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone 2:</label>
                <input type="text" class="form-control" id="telefone2" name="telefone2" value="<?= $candidato['telefone2'] ?>"  data-mask="(00) 00000-0000"  maxlength="15" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $candidato['cpf'] ?>"  data-mask="000.000.000-00" required maxlength="14" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade" value="<?= $candidato['idade'] ?>"  required>
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $candidato['bairro'] ?>"  required>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="rua" class="form-label">Rua:</label>
                <input type="text" class="form-control" id="rua" name="rua" value="<?= $candidato['rua'] ?>"  required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="numero" class="form-label">Número:</label>
                <input type="number" class="form-control" id="numero" name="numero" value="<?= $candidato['numero'] ?>"  required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $candidato['cidade'] ?>"  required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="cep" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?= $candidato['cep'] ?>" data-mask="00000-000"  maxlength="9" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $candidato['email'] ?>"   required  >
            </div>
        </div>

    </div>
    <div class="row justify-content-md-center mt-2">
        <a class="w-25 btn btn-lg btnPrincipal mb-4 text-white ms-" href="alterar-candidato.php?id=<?= $id['idcandidato'] ?>">Editar</a>
        <a class="w-25 btn btn-lg btn-danger mb-4 text-white ms-2" href="excluirCandidato.php?id=<?= $id['idcandidato'] ?>" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">Excluir</a>
        <a class="w-25 btn btn-lg btn-secondary mb-4 text-white ms-2" href="index.php">Cancelar</a>
    </div>
    
    
</form>




<?php

require "footer.php";
?>