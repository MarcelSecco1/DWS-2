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
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $color = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    
        print "<p> O nome informado foi: ". $nome ."</p>";
        print "<p> O email informado foi: ". $email . "</p>";
    
    
    ?>
    <style>
        body{
            background-color: <?php print $color; ?>;
        }

    </style>   
</body>
</html>