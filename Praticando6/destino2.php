<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>
    <h1>Página de Destino</h1>

    <?php 
    
    $n1 = filter_input(INPUT_POST, "numero1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $n2 = filter_input(INPUT_POST, "numero2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $n3 = filter_input(INPUT_POST, "numero3", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    
    $div = ($n1 + $n2 + $n3) / 3;

    if($div >= 6){
        print "<div>Você está: <id class=apro>APROVADO</id>, com a média " . $div;

        
    }
    elseif($div >= 4 && $div < 6){
        print "Você está de:  <id class=recu>RECUPERAÇÂO</id>, com a média " . $div;

       
    }
    elseif($div < 4){
        print "Você está: <id class=repro>REPROVADO</id>, com a média " . $div;
       
    }
    ?>
     <style>
        .apro{
            color:green;

        } 
        .repro{
            color:red;
        }
        .recu{
            color: yellow;
        }
    
    </style>


</body>
</html>