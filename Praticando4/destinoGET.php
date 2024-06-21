<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <?php 
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $color = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);


        print "<h1> Destino GET </h1>";
        print "<p> O nome informado foi: ". $nome ."</p>";
        print "<p> O email informado foi: ". $email . "</p>";
    
    
    ?>
    <button> <a href="destinoGET.php?nome=marcel&email=marcel@aluno"> Nome: Marcel, E-mail: marcel@aluno, </button><br><br>
    <button> <a href="destinoGET.php?nome=maria&email=maria@aluno"> Nome: Maria, E-mail: maria@aluno, </button><br><br>
    <button> <a href="destinoGET.php?nome=joao&email=joao@aluno"> Nome: Maria, E-mail: joao@aluno</button><br><br>


    <button> <a href="destinoGET.php?<?php echo $nome .$email;?>cor=darkgray"> Cor Cinza </button><br><br>
    <button> <a href="destinoGET.php?<?php echo $nome .$email;?>cor=pink"> Cor Rosa </button><br><br>
    <button> <a href="destinoGET.php?<?php echo $nome .$email;?>cor=yellow"> Cor Amarelo</button><br><br>
    <button> <a href= "destinoGET.php?"> Limpar </button>

    <style>
        body{
            background-color: <?php print $color; ?>;
        }

    </style>   
</body>
</html>