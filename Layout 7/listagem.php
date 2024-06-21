<?php
session_start();
require("logica-aut.php");

if(!autenticado()){
    $_SESSION["restrito"] = true;
    redireciona("index.php");
    die(); 
}
$titulo_pagina = "Exemplo de listagem";
require "cabecalho.php";
require "conexao.php";

$sql = "select id,nome,urlfoto,sobre from pessoas order by id";
$stmt = $conn->query($sql);


if (isset($_SESSION["result"])) {
  if (isset($_SESSION["result"])) {
      //inseriu de forma correta
      $msg = $_SESSION["msg"];
?>
      <div class="alert alert-success mt-3" role="alert">
          <h4 class="alert-heading">Sucesso!</h4>
          <p><?= $msg ?></p>
      </div>
  <?php
      unset($_SESSION["result"]);
      unset($_SESSION["msg"]);
  } else {
      //inseriu de maneira errada
      $erro = $_SESSION["msg"];
      unset($_SESSION["result"]);
  ?>
      <div class="alert alert-danger mt-3" role="alert">
          <h4 class="alert-heading">Erro!</h4>
          <p><?= $erro ?></p>
      </div>
<?php
      unset($_SESSION["msg"]);
  }
}
?>

<table class="table table-dark table-striped">
  <tr>
    <th scope="col" style="width: 10%;">ID</th>
    <th scope="col" style="width: 25%;">Nome</th>
    <th scope="col" style="width: 15%;">Foto</th>
    <th scope="col" style="width: 25%;">Sobre</th>
    <th scope="col" style="width: 25%;" colspan="2"></th>
  </tr>
  <tbody>
    <?php
    while ($row = $stmt->fetch()) {
    ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td>
          <a href="<?= $row['urlfoto'] ?>" target="_blank">
            <?= $row['urlfoto'] ?>
          </a>
        </td>
        <td><a href="listagem-detalhe.php?id=<?= $row['id']; ?>">Detalhes</a></td>
        <td>
          <a href="formulario.php?id=<?= $row['id']; ?>" class="btn btn-primary"><span data-feather="edit-3"></span>Edit</a>
          <a href="excluir-pessoa.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;"><span data-feather="trash"></span>Excluir</a>
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