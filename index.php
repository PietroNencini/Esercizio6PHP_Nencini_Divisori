<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 6 PHP</title>
</head>
<body>
    
    <?php
        $num = rand(10, 100);
        $divisorz = "<ul>";
        for ($i = 1; $i<$num/2; $i++) {
            if($num % $i == 0) {
                $divisorz = $divisorz."<li> $i </li>";
            }
        }
        $divisorz = $divisorz."</ul>";
        echo "Numero: $num <br>";
        echo "Divisori (escludendo il numero stesso) : $divisorz";
    ?>

</body>
</html>