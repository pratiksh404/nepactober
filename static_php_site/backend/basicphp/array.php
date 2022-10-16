<?php

$fruits = ["Apple", "Banana", "Orange"];

// ? count() = gives the count number of elements in the array
echo count($fruits);
echo "<br>";

// Associative Array = array in array
$peoples = [
    "john" => 32,
    "jane" => 28,
    "jim" => 34
];

foreach ($peoples as $people => $age) {
    echo "<br>";
    echo $people . " is " . $age . " years old";
}

$students = [
    [
        "name" => "John",
        "age" => 32,
        "grade" => "1",
        "section" => "A"
    ],
    [
        "name" => "Jane",
        "age" => 28,
        "grade" => "2",
        "section" => "B"
    ],
    [
        "name" => "Jim",
        "age" => 34,
        "grade" => "3",
        "section" => "C"
    ]
];

// First loop
$student =    [
    "name" => "John",
    "age" => 32,
    "grade" => "1",
    "section" => "A"
];

foreach ($students as $student) {
    echo "<br>";
    echo $student["name"] . " is in grade" . $student["grade"] . " in section " . $student["section"] . " and is " . $student["age"] . " years old";
}
