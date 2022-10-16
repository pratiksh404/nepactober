<?php

// Path: backend\index.php
$global_variable = "Hello World from Global";
helloWorld();
abc();

function helloWorld()
{
    global $global_variable;
    $local_variable = "Hello World from Local";
    echo $global_variable;
    echo $local_variable;
    echo "Hello World";
}

function abc()
{
    global $local_variable;
    echo $local_variable;
}
