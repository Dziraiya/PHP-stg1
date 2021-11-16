1). Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:<br>
Если $a и $b положительные, вывести их разность.<br>
Если $а и $b отрицательные, вывести их произведение.<br>
Если $а и $b разных знаков, вывести их сумму.<br>
<br>
<br>
<?php
$a = 20;
$b = 5;
echo 'a = ' . $a . '<br>';
echo 'b = ' . $b . '<br>';
if ($a > 0 && $b > 0) {
    echo ($a / $b);
} else if ($a < 0 && $b < 0) {
    echo ($a * $b);
} else if ($a < 0 && $b > 0 || $a > 0 && $b < 0) {
    echo ($a + $b);
}
?>
<br>
<br>
2). Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
switch организовать вывод чисел от $a до 15.
<br>
<br>
<?php
$a = 4;
echo 'a = 4<br><br>';
switch ($a) {
    case 0:
        echo '0 <br>';
    case 1:
        echo '1 <br>';
    case 2:
        echo '2 <br>';
    case 3:
        echo '3 <br>';
    case 4:
        echo '4 <br>';
    case 5:
        echo '5 <br>';
    case 6:
        echo '6 <br>';
    case 7:
        echo '7 <br>';
    case 8:
        echo '8 <br>';
    case 9:
        echo '9 <br>';
    case 10:
        echo '10 <br>';
    case 11:
        echo '11 <br>';
    case 12:
        echo '12 <br>';
    case 13:
        echo '13 <br>';
    case 14:
        echo '14 <br>';
    case 15:
        echo '15 <br>';
        break;
    default:
        echo 'default';
}
?>
<br>
<br>
3). Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
<br>
<br>
<?php
function plus($arg1, $arg2)
{
    return $arg1 + $arg2;
}

echo plus(3, 4) . '<br>';

function minus($arg1, $arg2)
{
    return $arg1 - $arg2;
}

echo minus(10, 7) . '<br>';

function umnoj($arg1, $arg2)
{
    return $arg1 * $arg2;
}

echo umnoj(3, 7) . '<br>';

function deli($arg1, $arg2)
{
    return $arg1 / $arg2;
}

echo deli(25, 5) . '<br>';
?>
<br>
<br>
4).Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.<br> В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
<br>
<br>
<?php
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return plus($arg1, $arg2);
        case '-':
            return minus($arg1, $arg2);
        case '*':
            return umnoj($arg1, $arg2);
        case '/':
            return deli($arg1, $arg2);
    }
}
echo mathOperation(5, 3, '+');
?>
<br>
<br>
6). С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень
<br>
<br>
<?php
function power($val, $pow)
{
    return ($pow == 1) ? $val : $val * power($val, $pow - 1);
}
echo power(5, 3);
?>