<?php
session_start();
require("logica-aut.php");
$titulo_pagina = "Formulário de Usuários";
require "cabecalho.php";


?>
<script>
        function verifica_senhas(){
            var senha = document.getElementById("senha");
            var confsenha = document.getElementById("confsenha");

            if (senha.value && confsenha.value){
                if(senha.value != confsenha.value){
                    senha.classList.add("is-invalid");
                    confsenha.classList.add("is-invalid");
                    confsenha.value = null;
                }else{
                    senha.classList.remove("is-invalid");
                    confsenha.classList.remove("is-invalid");
                }
            }
        }
</script>

    <form action="inserir-usuario.php" method="POST">

    <div class="row">
        <div class="col-3">
            <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>  
            </div>

            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>  
        </div>

            <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" required>  
        </div>
  
            <div class="mb-3">
            <label for="confsenha" class="form-label">Confirmação de Senha</label>
            <input type="password" class="form-control" name="confsenha" id="confsenha" required onblur="verifica_senhas()">  
        </div>
</div>

        <div class="col-2">
           <img src="https://www.kindpng.com/picc/m/3-39853_add-user-group-woman-man-icon-user-add.png" class="img-thumbnail" id="img_preview" alt="...">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Gravar</button>
    <button type="reset" class="btn btn-warning">Cancelar</button>

    </form>

<?php

require "rodape.php";


?>