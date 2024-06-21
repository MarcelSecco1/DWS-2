<?php
session_start();
require("logica-aut.php");


$titulo_pagina = "Início";

require "cabecalho.php";


echo "<h2>Essa é a página inicial (INDEX.PHP).</h2>";

if(isset($_SESSION["restrito"]) && $_SESSION["restrito"]){
    ?>
    <br>
 <div class="alert alert-danger" role="alert">
     <h4 class="alert-heading">Alerta!</h4>
     <p>Você está tentando acessar conteúdo restrito.</p>
 </div>
 <?php
     unset($_SESSION["restrito"]);
 }

require "rodape.php";


?>