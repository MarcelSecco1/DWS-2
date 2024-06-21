<?php
session_start();
require("logica-aut.php");


$titulo_pagina = "Exemplo de Listagem em Galeria";
require "cabecalho.php";
require "conexao.php";

$sql = "select id,nome,urlfoto,sobre from pessoas order by id";
$stmt = $conn->query($sql);

?>
<style>
    .card-text{
        text-align: justify;
        text-indent: 1.5em;
        line-height: 1.5;
    }
</style>

<div class="album  py-5 bg-white">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <?php
            while ($row = $stmt->fetch()) {
            ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="rounded float-end m-4" src="<?= $row['urlfoto'] ?>" alt="<?= $row['nome'] ?>">
                        <div class="card-body">
                            <h5 class="card-tittle"><?= $row['nome'] ?></h5>
                            <p class="card-text"> <?= $row['sobre'] ?></p>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

</div <?php
        require "rodape.php";

        ?>