<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3</title>
</head>
<body>
    <h1>
        Quadrado - Praticando 3
    </h1>
    <form action="destino3.php" method="POST">
    <label for="quadrado">Quadrados</label>

        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        
        <label for="texto">Texto:</label>
        <textarea type="texto" name="texto" id="texto" required>
        </textarea>
        <br><br>

        <label for="cores">Cores:</label>
        <select id="cores" name="cores">
            <option value="blue">Azul</option>
            <option value="red">Red</option>
            <option value="gray">Gray</option>
            <option value="green">Verde</option>  
    </select>
    <br><br>
    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>
    </form>
    


</body>
</html>