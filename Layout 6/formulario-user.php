<?php

$titulo_pagina = "Formulário Usuário aaaaaaaaa";
require "cabecalho.php";

?>
<script>
    function verifica_senha(){
        var senha = document.getElementById("senha");
        var confsenha = document.getElementById("conf-senha");
        
        if(confsenha.value && senha.value){
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

<form action="inserir-user.php" method="POST">
    <div class="row">
        <div class="col-5">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div><div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>  
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <div class="mb-3">
                <label for="conf-senha" class="form-label">Confirmar Senha</label>
                <input type="password" class="form-control" id="conf-senha" name="conf-senha" onblur="verifica_senha()" required>
            </div>  
            
           
        </div>
        <div class="col-3">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.psdgraphics.com%2Ffile%2Fadd-user-icon.jpg&f=1&nofb=1&ipt=dd4a4e3eed1c3857819ad8e73810fd78b77e022dbf23f39e20913a551e886145&ipo=images" class="img-thumbnail" id="img-preview" alt="...">
        </div>
  </div>
  <button type="submit" class="btn btn-primary">Gravar</button>
  <button type="reset" class="btn btn-warning">Cancelar</button>
</form>
<?php

require "rodape.php";

?>