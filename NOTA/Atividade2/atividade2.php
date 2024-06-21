<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <?php  
         $font = filter_input(INPUT_GET, "font", FILTER_SANITIZE_SPECIAL_CHARS);
         $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <style>
        body{
            background-color: <?php print $cor;?>;
            color: <?php print $font;?>;
        }
        button{
            display: flex;
            

        }
    </style>
    <?php  
         $font = filter_input(INPUT_GET, "font", FILTER_SANITIZE_SPECIAL_CHARS);
         $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    
    <h1> <button> <a href="atividade2.php?cor=black&font=white"> Escuro </a></h1></button>
    <h1> <button> <a href="atividade2.php?cor=white&font=black"> Claro </a></h1></button>

    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget euismod augue, quis suscipit felis. Donec rutrum dignissim sapien, sed tempor quam. Nullam lectus diam, accumsan vitae nunc quis, euismod blandit elit. Nulla semper justo vel massa cursus, vel pharetra turpis ultricies. Maecenas fermentum eros sed enim suscipit facilisis. Curabitur semper diam ut mollis euismod. Nulla sit amet cursus est. Pellentesque ut pretium eros. Curabitur malesuada, tellus eu luctus elementum, mauris nunc tempus dui, at commodo nunc elit ut nisl. Pellentesque aliquam ipsum felis, vel ultricies massa placerat a. Pellentesque in facilisis libero. Nam velit est, semper nec justo at, accumsan placerat orci. Donec mauris magna, imperdiet vel ante non, sodales consequat turpis. In metus eros, facilisis sed rutrum eget, accumsan eu erat.

    Nulla facilisi. Duis suscipit sem non elit pellentesque convallis lobortis eu turpis. Vivamus in nibh leo. Donec vitae tellus tristique, pharetra libero sed, aliquet justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ac dolor eros. Praesent purus nisl, sollicitudin auctor felis sit amet, gravida tincidunt erat. Proin euismod, turpis eu pretium rutrum, risus dolor cursus nisi, faucibus finibus metus mi a magna. Nunc quam ligula, mattis id dolor a, egestas bibendum nisi. Aliquam eu pharetra justo.

    In sed imperdiet metus. Ut ac ligula ac risus aliquet blandit vitae non nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque gravida odio vel enim rutrum blandit. Ut id gravida massa, sit amet eleifend erat. Vestibulum eget sollicitudin sem. Phasellus hendrerit dolor vel egestas hendrerit. Donec consequat at quam sit amet maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed quis convallis turpis. Duis ut euismod velit. Nulla semper nulla quis arcu dignissim maximus. Nam id venenatis velit. Curabitur bibendum, velit ac mattis cursus, mi ex pretium lectus, sit amet luctus purus dolor malesuada turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In pharetra tristique mattis.                 
    </p>
</body>
</html>