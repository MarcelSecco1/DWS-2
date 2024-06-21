<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
        $n = filter_input(INPUT_POST, "number", FILTER_SANITIZE_SPECIAL_CHARS);
        $result = filter_input(INPUT_POST, "number", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $i = 1;

        for($i = 1; $i<=10; $i++){
            $result = $i * $n;
            print $n . " x ". $i . " = " . $result ."<br>";
        }

    ?>
    
</body>
</html>