<?php
$titulo_pagina = "Excluir Pessoa";
require "cabecalho.php";
require "conexao.php";

 $id = filter_input(INPUT_GET, "id",FILTER_SANITIZE_SPECIAL_CHARS);

//echo "<p>ID: $id <p>";
$sql = "delete from pessoas where id= ?";
$stmt = $conn->prepare($sql);
$result = $stmt->execute([$id]);




if($result == true){
 ?>   
    <div class="alert alert-success" role="alert">
        <h4>Registro excluído com sucesso.</h4>
    </div>
<?php
}else{
?>
    <div class="alert alert-danger" role="alert">
        <h4>Falha ao efetuar.</h4>
        <p><?php echo $stmt->error; ?></p>
    </div>

    <?php
}

require "rodape.php";

?>