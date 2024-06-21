<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadrado</title>
</head>
<body>
    <h1>
        Quadrado - Praticando 2
    </h1>
    <form action="praticando2.php" method="GET">
    <label for="quadrado">Quadrados</label>
    <select id="quadrado" name="quadrado">
        <option value="1">1</option>
        <option value="5">5</option>
        <option value="8">8</option>
        <option value="11">11</option>
        <option value="32">32</option>
    </select>
    <button type="submit">Enviar</button>
    </form>

    <?php
        $qntd = filter_input(INPUT_GET, "quadrado", FILTER_SANITIZE_SPECIAL_CHARS);
        $i =1;
        print "<div class=lados  </div>";
        for($i = 1; $i <= $qntd; $i++){
            echo "<id class=quadrado> $i </id>";
        }
       
    ?>

    <style>
        .lados{
            display: flex;
            flex-wrap: wrap;
        }
        .quadrado{
            width: 50px;
            height: 50px;
            background-color: blue;
            padding: 50px, 50px, 50px, 50px;
            margin-right: 15px;
            margin-left: 15px;
            margin-top: 25px;
            font-size: 3pc;
            text-align: center;
        }
    </style>

</body>

</html>