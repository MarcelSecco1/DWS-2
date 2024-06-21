<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<h1>Formulário</h1>
       
       <form action= "destino2.php" method= "POST">
           <label for="number">Number 1: </label>
           <input type="number" id="number"  name="numero1" required placeholder="Digite seu número 1."><br><br>

           <label for="number">Number 2:</label>
           <input type="number" id="number2"  name="numero2" required placeholder="Digite seu número 2."><br><br>

           <label for="number">Number 3:</label>
           <input type="number" id="number3"  name="numero3" required placeholder="Digite seu número 3."><br><br>
           

           <button type="submit" value="enviar" class="enviar">Enviar</button>
           <button type="reset" value="resetar" class="limpar">Limpar</button>

</body>
</html>