<?php
    $titulo_pagina = "Exemplo de formulário";
    require "cabecalho.php";
    
?>

<form action="inserir-pessoa.php" method="POST">

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nome">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">URL:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="https://www.google.com/" name="URL">
    </div>
    <div class="mb-3">
        <label for="sobre" class="form-label">Sobre:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sobre"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
    <button type="reset" class="btn btn-primary btn-lg">Limpar</button>

</form>

<?php 
    require "rodape.php";

?>