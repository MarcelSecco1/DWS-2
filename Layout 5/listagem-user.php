<?php
$titulo_pagina = "Exemplo de listagem de usuários";
require "cabecalho.php";
require "conexao.php";

$sql = "select id,nome,email from usuarios order by id";
$stmt = $conn->query($sql);

?>

<table class="table table-dark table-striped">
  <tr>
    <th scope="col" style="width: 10%;">ID</th>
    <th scope="col" style="width: 25%;">Nome</th>
    <th scope="col" style="width: 25%;">Email</th>
    <th scope="col" style="width: 25%;" colspan="2"></th>
  </tr>
  <tbody>
    <?php
    while ($row = $stmt->fetch()) {
    ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['email'] ?></td>
        <td>
          <a href="formulario.php?id=<?= $row['id']; ?>" class="btn btn-primary"><span data-feather="edit-3"></span>Edit</a>
          <a href="excluir-user.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;"><span data-feather="trash"></span>Excluir</a>
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