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
       
        <form action= "server1.php" method= "POST">
            <label for="e-mail">E-mail:</label>
            <input type="email" id="e-mail"  name="email" required placeholder="Digite seu e-mail."><br><br>

            <label for="nome">Nome:</label>
            <input type="text" id="nome"  name="nome" required placeholder="Digite seu nome."><br><br>
            
            <label for="cor">Cor:</label>
            <input type="color" id="cor"  name="cor" required><br><br>

            <button type="submit" value="enviar" class="enviar">Enviar</button>
            <button type="reset" value="resetar" class="limpar">Limpar</button>

</body>
</html>