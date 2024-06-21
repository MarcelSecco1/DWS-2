<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

if (empty($id)) {
    $action = "inserir-pessoa.php";
    $titulo_pagina = "Exemplo de formulário";

    $pessoa['nome'] = null;
    $pessoa['id'] = null;
    $pessoa['urlfoto'] = null;
    $pessoa['sobre'] = null;
} else {
    $action = "alterar-pessoa.php";
    $titulo_pagina = "Exemplo de formulário";

    require "conexao.php";

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);


    $sql = "select id,nome,urlfoto,sobre from pessoas where id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    $pessoa = $stmt->fetch();

    var_dump($pessoa);
}


require "cabecalho.php";


?>

<form action="<?= $action ?>" method="POST">

    <input type="hidden" name="id" value="<?= $id?>" require>

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nome" value="<?= $pessoa['nome'] ?>">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">URL:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="https://www.google.com/" name="URL" value="<?= $pessoa['urlfoto'] ?>">
    </div>
    <div class="mb-3">
        <label for="sobre" class="form-label">Sobre:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sobre" value="<?= $pessoa['sobre'] ?>"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
    <button type="reset" class="btn btn-primary btn-lg">Limpar</button>

</form>

<?php
require "rodape.php";

?>