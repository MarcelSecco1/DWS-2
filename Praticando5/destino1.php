<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    
<?php
    $n1 = filter_input(INPUT_POST, "numero1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $n2 = filter_input(INPUT_POST, "numero2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $soma = $n1 + $n2;
    
    print "A sua soma é: " . $soma;

    ?>
<?php
    if($n1 > $n2){
        print "O número 1 é maior que o número 2.";

    } else{
        print "O número 2 é maior que o número 1.";
    }


?>
<style>
    


</style>   


</body>
</html>