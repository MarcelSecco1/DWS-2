<?php
$titulo_pagina = "Exemplo de listagem";
require "cabecalho.php";
require "conexao.php";

$sql = "select id,nome,urlfoto,sobre from pessoas order by id";
$stmt = $conn->query($sql);

?>

<table class="table table-dark table-striped">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Nome</th>
    <th scope="col">Foto</th>
    <th scope="col">Sobre</th>
    <th scope="col"></th>
  </tr>
  <tbody>
    <?php
    while ($row = $stmt->fetch()) {
    ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['urlfoto'] ?></td>
        <td><?= $row['sobre'] ?></td>
        <td>
          <a href="formulario.php?id=<?= $row['id'];?>" class="btn btn-primary"><span data-feather="edit-3"></span>Edit</a>
          <a href="excluir-pessoa.php?id=<?= $row['id'];?>" class="btn btn-danger" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;"><span data-feather="trash"></span>Excluir</a>
        </td>
      </tr>
    <?php
    }
    ?>

  </tbody>
</table>


<?php
require "rodape.php";

?>