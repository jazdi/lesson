<! DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Арифметические операции в PHP</title>
</head>
<body>
<?php
$a = 5;
$b = 2;
$result = $a + $b; echo "Сложение: $result <br>";
$result = $a - $b; echo "Вычитание: $result <br>";
$result = $a * $b; echo "Умножение: $result <br>";
$result = $a / $b; echo "Деление: $result <br>";
$result = $a % $b; echo "Деление по модулю: $result <br>";
$result = $a ** $b; echo "Возведение в степень: $result <br>";
$result = intdiv($a,$b); echo "Целочисленное деление: $result <br>";
$result = $b <=> $a; echo "СпейсШип: $result <br>";
?>
</body>
</html>
