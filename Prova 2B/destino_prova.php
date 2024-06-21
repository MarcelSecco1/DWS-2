<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Destino Prova</h1>
    <?php
        $n = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_SPECIAL_CHARS);

        $soma = $n + $n;
        $quadrado = $n * $n;
        $metade = $quadrado /2;

        if($n >0){
            echo "O número informado foi: $n<br><br>";
            echo "$n + $n = $soma<br><br>";
            echo "$n ­² é: $quadrado<br><br>";
            echo "A metade de $quadrado é: $metade<br><br>";

            echo "Agora vamos criar uma contagem regressiva começando em: $metade<br><br>";
            
            for($i=$metade;$i>=1;$i--){
                if($i > 1){
                    echo "$i,";
                }
                else{
                    echo "$i";
                }
            }

        }else{
            echo "O número informado foi: $n<br><br>";
            echo "O número $n, é menor que zero, não são permitidos.<br><br>";

            echo "<a href=http://localhost/marcel/ex1_prova.php>Voltar</a>";
        }
    
    ?>

</body>
</html>