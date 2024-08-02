<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="numero1"><?php echo ' + '?><input type="number" name="numero2">
        <button type="submit" id="sumar" value="sumar">Sumar</button>
    </form>

    <?php

        if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
            $num1= $_GET['numero1'];
            $num2= $_GET['numero2'];
            $suma;

            if (empty($suma)) {
                $suma= $num1 + $num2;

                echo "Resultado: $num1 + $num2 = ".$suma;
            }
        }
    ?>

</body>
</html>