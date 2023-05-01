<?php

echo '<h1>User-defined Functions</h1>';
//This below is a Docblock
/**
 * Greet a given person's name and confirm their age.
 *
 * @param $name string A person's name
 * @param $age int A person's age
 * @return string The greeting
 */
function sayHello($name, $age)
{
   return'Hello, ' . $name . '! You are ' . $age . '.';
}

echo sayHello('Mike', 30);

$greeting = sayHello('Bob', 86);

echo $greeting;

function timesBy3DivideBy2(int $number): float //signature of function
{
    return $number * 3/2;
}                                               //between {} is body of function

Echo timesBy3DivideBy2(5);

// int & float is a type hint. $number is a parameter, 5 is an argument
//void is a valid type hint