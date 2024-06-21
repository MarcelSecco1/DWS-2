<?php

$titulo_pagina = "Inserir pessoa";
require "cabecalho.php";

require "conexao.php";

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$urlfoto = filter_input(INPUT_POST, "urlfoto", FILTER_SANITIZE_URL);
$sobre = filter_input(INPUT_POST, "sobre", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "insert into pessoas (nome, urlfoto, sobre) values (?, ?, ?)";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $urlfoto, $sobre]);

if ($result == true){
  ?>
  
  <div class="alert alert-success" role="alert">
    <h4>Dados gravados com sucesso!</h4>
  </div>
  <?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        <h4>Falha ao efetuar gravação.</h4>
        <p><?php echo $stmt->error; ?></p>
    </div>
    <?php
}


require "rodape.php";

?>