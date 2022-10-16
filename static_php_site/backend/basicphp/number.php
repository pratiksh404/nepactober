<?php

$x = 1;
$y = 3.6;


echo "<br>";
echo is_int($x) ? "$x Integer" : "Not an integer";
echo "<br>";
echo is_int($y) ? "Integer" : "$y Not an integer";
echo "<br>";
echo is_float($x) ? "Float" : "$x Not an float";
echo "<br>";
echo is_float($y) ? "$y Float" : "Not an float";
echo "<br>";
echo (int) $y;
echo "<br>";
echo floor(3.5); // 3
echo "<br>";
echo ceil(3.4); // 4
echo "<br>";
echo round(3.6); // 4
echo "<br>";
echo round(3.4); // 3
echo "<br>";
echo rand(1, 6); // random number between 1 and 10
echo "<br>";
echo sqrt(9); // 3
echo "<br>";
echo pow(2, 3); // 8
echo "<br>";
echo max(22, 5, 7, 91, 55); // 91
echo "<br>";
echo min(22, 5, 7, 91, 55); // 5
echo "<br>";
echo abs(-22); // 22
echo "<br>";
echo decbin(12); // 1100
echo "<br>";
echo dechex(12); // c
echo "<br>";
echo decoct(12); // 14
const PI = 3.14;
echo "<br>";
echo PI;

define("MY_CONSTANT", "Hello World Constant");

echo "<br>";
echo MY_CONSTANT;
echo "<br>";

$xyz = 1;

switch ($xyz) {
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    case 3:
        echo "Three";
        break;
    default:
        echo "None";
}

$fruits = ["Apple", "Banana", "Orange"];

for ($i = 0; $i < count($fruits); $i++) {
    echo "<br>";
    echo $fruits[$i];
}

$count = 0;
while ($count < count($fruits)) {
    echo "<br>";
    echo $fruits[$count];
    $count++;
}

foreach ($fruits as $fruit) {
    echo "<br>";
    echo $fruit;
}
