<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    
    <h1>Formulário</h1>
       
        <form action= "server.php" method= "POST">
            <label for="titulo">Título::</label>
            <input type="text" id="titulo"  name="titulo" required placeholder="Digite seu título:"><br><br>
            
            <label for= "texto">Texto: </label>
            <textarea id="texto" name="texto" rows="3" cols="20" required></textarea><br><br>
            
            <label for="link">Link:</label>
            <input type="url" id="link"  name="link" required placeholder="Digite seu link."><br><br>

            <button type="submit" value="enviar" class="enviar">Enviar</button>
            <button type="reset" value="resetar" class="limpar">Limpar</button>

</body>
</html>