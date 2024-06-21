<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3</title>
</head>
<body>
    <h1> Praticando 3 - Destino</h1>
    <?php
        $n = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_SPECIAL_CHARS);
        $texto = filter_input(INPUT_POST, "texto", FILTER_SANITIZE_SPECIAL_CHARS);
        $color = filter_input(INPUT_POST, "cores", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $i = 1;
        print "<div class=lados </div>";
        for($i = 1; $i<=$n; $i++){
            echo "<id class=quadrado> $texto </id>";
        }
    ?>
    <style>
        .lados{
            display: flex;
            flex-wrap: wrap;
        }
        .quadrado{
            width: 700px;
            height: 100px;
            background-color: <?php  print $color ?>;
            margin-right: 15px;
            margin-left: 15px;
            margin-top: 25px;
            font-size: 3pc;
            text-align: center;
        }
    </style>
    
</body>
</html>