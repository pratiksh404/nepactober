<?php

$name = "John";
$sentence = "My name is $name abc";
$reverce = "abc";
$fullname = "John Doe";

echo strlen($name);
echo "<br>";
echo str_word_count($sentence);
echo "<br>";
echo strrev($reverce);
echo "<br>";
echo strpos($fullname, "Doe");
echo "<br>";
echo str_replace("Doe", "Smith", $fullname);
