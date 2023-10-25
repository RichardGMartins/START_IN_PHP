<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços</title>
    <style>
        .column {
            float: left;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="column">
        <h2>Numeros pares > crescente</h2>
    <?php 
        $i = 2;
        while ($i <= 500){
            echo $i . "<br>";
            $i += 2;
        }
    ?>
    </div>
    <div class="column">
        <h2>Numeros Impares < decrescente</h2>
        <?php 
            $p = 499;
            while ($p >= 1){
                echo $p . "<br>";
                $p -= 2;
        }
        ?>
    </div>
</body>
</html>


