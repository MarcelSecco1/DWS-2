<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ex2 - Prova 2B</h1>

    <h2>Opcções:</h2>
    <?php
            $dir = filter_input(INPUT_GET, "dir", FILTER_SANITIZE_SPECIAL_CHARS);
            $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <p>Cores:
        <a href="ex2_prova.php?dir=<?php echo $dir?>&cor=red">Vermelho</a>
        <a href="ex2_prova.php?dir=<?php echo $dir?>&cor=green">Verde</a>
        <a href="ex2_prova.php?dir=<?php echo $dir?>&cor=blue">Azul</a>        
    </p>
       
    <p> Alinhamento:
        <a href="ex2_prova.php?cor=<?php echo $cor?>&dir=left">Esquerda</a>
        <a href="ex2_prova.php?cor=<?php echo $cor?>&dir=center">Centro</a>
        <a href="ex2_prova.php?cor=<?php echo $cor?>&dir=right">Direita</a>      
    </p>
        
    <div class ="direc">
    <p class="textoo">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta nec metus vel tristique. In congue ac tortor nec dignissim. Etiam velit lorem, imperdiet quis suscipit tristique, consectetur nec enim. Quisque nulla eros, pellentesque porta nibh quis, vehicula accumsan leo. Phasellus aliquet sapien justo, ac mollis dui vulputate scelerisque. Nulla venenatis dui id mi venenatis finibus. Vivamus aliquet dolor sit amet dolor ultrices, id scelerisque leo maximus. Maecenas imperdiet ex lorem.

    Vivamus blandit suscipit magna, et semper tellus molestie eget. Fusce quis enim vel erat elementum lobortis. Aliquam non eleifend libero. Integer dapibus mattis dolor. Vestibulum nec dui non augue bibendum volutpat. Cras ut porta lectus. Aliquam quis leo diam.

    Pellentesque efficitur condimentum mi, ac ornare lorem vestibulum ac. Integer viverra lorem ac condimentum pulvinar. Sed posuere tortor sapien, id volutpat ante maximus sit amet. Etiam bibendum venenatis justo id varius. Cras egestas laoreet odio. Fusce sed tellus lobortis, vulputate ante vel, porta lectus. Duis massa nisl, pretium non convallis a, viverra quis nisi. Sed eget tincidunt ante, id hendrerit libero. Curabitur ullamcorper, neque id porttitor facilisis, magna purus porta odio, eu hendrerit ipsum ex non sem. Duis ornare turpis at neque sodales, at scelerisque nulla gravida. Morbi nec eros risus. In et purus hendrerit quam dignissim ultricies quis a leo.

    </p>
    </div>

    <style>
        .textoo{
            color: <?php print $cor; ?>;
        }
        .direc{
            text-align: <?php print $dir; ?>;
        }

    </style> 


</body>
</html>