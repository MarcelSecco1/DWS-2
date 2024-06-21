<?php
session_start();
$titulo_pagina = "Exemplo de página Inicial";
require "cabecalho.php";

?>


<p>Olá essa é minha página Inicial</p>


<?php
    if(isset($_SESSION["restrito"]) && $_SESSION["restrito"]){
        ?>
        <br>
        <div class="alert alert-danger" role="alert">
        <h4> Você precisa está logado para ter acesso. </h4>
        
    </div>

    <?php
        unset($_SESSION["restrito"]);
    }

require "rodape.php";

?>