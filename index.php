<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork4_7</title>
</head>
<body>
<h2>Сортировка массивов</h2>
<p>Создать массив с 90 до 150 и шаг - 3. Ключом этого массива будет аналогичный массив но в обратном порядке. Например
    у ключа 90 будет значение 150. Создать еще один аналогичный массив но с сортировкой по возрастанию ключа. Вывести
    эти 2 массива.</p>
<?php
//Первый массив с ключами массива по убыванию
$arFirst = array_combine(range(150, 90, 3), range(90, 150,3));
echo "<b>Первый массив с ключами по убыванию:</b>";
echo "<pre>";
print_r($arFirst);
echo "</pre>";

//Второй массив с ключами массива по возрастанию
$arTwo = $arFirst;
ksort($arTwo);
echo "<b>Второй массив с ключами по возрастанию:</b>";
echo "<pre>";
print_r($arTwo);
echo "</pre>";
?>
</body>
</html>
