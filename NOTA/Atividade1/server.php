
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
        $_titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $link = filter_input(INPUT_POST, "link", FILTER_SANITIZE_SPECIAL_CHARS);
        $texto = filter_input(INPUT_POST, "texto", FILTER_SANITIZE_SPECIAL_CHARS);
    
        print "<h1>" . $_titulo ."</h1>";
        print "<p>". $texto ."</p>";
        print "<a href=". $link. " _blank>" . $link;
    
    
    ?>
   
 
</body>
</html>