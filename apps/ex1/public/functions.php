<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <?php include_once '../includes/styles.php' ?>
</head>
<body>
    <h1>Functions</h1>
    <a href="/">Home</a>
    <?php 

        /**
         * Adds two values
         * @param int|float $x Value 1
         * @param int|float $y Value 2 
         * @return float|int Sum of the 2 Values
         */
        function add(int|float $x, int|float $y): int|float {
            return $x + $y;
        }

        function subtract(int|float $x, int|float $y): int|float {
            return $x - $y;
        }

        function multiply(int|float $x, int|float $y): int|float {
            return $x * $y;
        }

        function divide(int|float $x, int|float $y): int|float {
            return $x / $y;
        }

        function mod(int|float $x, int|float $y): int|float {
            return $x % $y;
        }
        
    ?>
    <div>3 + 4 = <?= add(3, 4) ?></div>
    <div>3 - 4 = <?= subtract(3, 4) ?></div>
    <div>3 * 4 = <?= multiply(3, 4) ?></div>
    <div>3 / 4 = <?= divide(3, 4) ?></div>  <!-- Division by 0 throws an error -->
    <div>3 % 4 = <?= mod(3, 4) ?></div>
</body>
</html>