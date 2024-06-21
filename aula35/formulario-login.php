<?php
session_start();
require("logica-aut.php");
$titulo_pagina = "";
require "cabecalho.php";


?>

<div class="row justify-content-md-center">
        <div class="col-3">
            <br><br><br>
        <form action="login.php" method="POST">
        <h1 class="h3 mb-3 fw-normal">Por favor identifique-se</h1>

        <div class="form-floating mb-2">
            <input type="email" class="form-control" name="email" id="floatingInput">
            <label for="floatingInput">Endereço de email</label> 
        </div>

        <div class="form-floating mb-4">
            <input type="password" class="form-control" name="senha" id="floatingPassword">
            <label for="floatingPassword">Senha</label> 

        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    </form>
        </div>
</div>


    
<?php

require "rodape.php";


?>