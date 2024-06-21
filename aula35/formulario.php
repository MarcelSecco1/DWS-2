<?php
session_start();
require("logica-aut.php");
if (!autenticado()) {
    $_SESSION["restrito"] = true;
    redireciona("index.php");
    die();
}
$titulo_pagina = "Formulário";
require "cabecalho.php";


?>
<style>
img{
    display: none;
}
</style>
<script>
    function
        imagePreview(valor){
            
            var img = document.getElementById('img_preview');
            if(valor){
                img.setAttribute('src', valor);
                img.style.display = 'inline';
               
            }else{
                img.style.display = 'none';
            }
        }
</script>

    <form action="inserir-pessoa.php" method="POST">

    <div class="row">
        <div class="col-8">
            <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>  
            </div>
            <div class="mb-3">
            <label for="urlfoto" class="form-label">URL Foto</label>
            <input type="url" class="form-control"  id="urlfoto" 
            name="urlfoto" aria-describedby="urlfotoHelp" required
            onchange="imagePreview(this.value)">   
            <div id="urlfotoHelp" class="form-text">
                
            </div>         
            </div>
            <div class="mb-3">
            <label for="sobre" class="form-label">Sobre a pessoa</label>
            <textarea class="form-control" name="sobre" id="sobre"></textarea>   
            </div>
        </div>
        <div class="col-4">
           <img src="..." class="img-thumbnail" id="img_preview" alt="...">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Gravar</button>
    <button type="reset" class="btn btn-warning">Cancelar</button>

    </form>

<?php

require "rodape.php";


?>