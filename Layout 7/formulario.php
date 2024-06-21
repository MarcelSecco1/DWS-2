<?php
session_start();
require("logica-aut.php");

if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona("index.php");
    die();
}



$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

if (empty($id)) {
    $action = "inserir-pessoa.php";
    $titulo_pagina = "Exemplo de formulário";

    $pessoa['nome'] = null;
    $pessoa['id'] = null;
    $pessoa['urlfoto'] = null;
    $pessoa['sobre'] = null;

    $image_display = "none";
} else {
    $action = "alterar-pessoa.php";
    $titulo_pagina = "Exemplo de formulário";

    require "conexao.php";

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);


    $sql = "select id,nome,urlfoto,sobre from pessoas where id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    $pessoa = $stmt->fetch();

    $image_display = "inline";

    //var_dump($pessoa);
}


require "cabecalho.php";


?>
<style>
    img {
        display: <?= $image_display ?>;
    }
</style>
<script>
    function imagemPreview(valor) {
        var img = document.getElementById('img-preview');

        if (valor) {
            img.setAttribute('src', valor);
            img.style.display = 'inline';

        } else {
            img.style.display = 'none';
        }
    }
</script>


<form action="<?= $action ?>" method="POST">

    <div class="row">

        <div class="col-8">
            <input type="hidden" name="id" value="<?= $id ?>" require>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nome" value="<?= $pessoa['nome'] ?>">
            </div>
            <div class="mb-3">
                <label for="urlfoto" class="form-label">URL:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" onchange="imagemPreview(this.value)" placeholder="https://www.google.com/" name="urlfoto" value="<?= $pessoa['urlfoto'] ?>">
            </div>
            <div class="mb-3">
                <label for="sobre" class="form-label">Sobre:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sobre"><?= $pessoa['sobre'] ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            <button type="reset" class="btn btn-primary btn-lg">Limpar</button>
        </div>
        <div class="col-4">
            <img src="<?= $pessoa['urlfoto'] ?>" class="img-thumbnail" id="img-preview" alt="...">
        </div>

    </div>

</form>


<?php
if (isset($_SESSION["result"])) {
    if (isset($_SESSION["result"])) {
        //inseriu de forma correta
?>
        <div class="alert alert-success mt-3" role="alert">
            <h4 class="alert-heading">Sucesso!</h4>
            <p>Dados Gravados corretamente.</p>
        </div>
    <?php
        unset($_SESSION["result"]);
    } else {
        //inseriu de maneira errada
        $erro = $_SESSION["erro"];
        unset($_SESSION["result"]);
    ?>
        <div class="alert alert-danger mt-3" role="alert">
            <h4 class="alert-heading">Erro!</h4>
            <p><?= $erro ?></p>
        </div>
<?php
        unset($_SESSION["erro"]);
    }
}

require "rodape.php";

?>