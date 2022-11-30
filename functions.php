<?php

/*
Create a function that given two numbers returns the sum of both
Create a function that given two numbers returns the multiplication of both
Create a function that given two numbers returns the division of both
Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
*/

function sum(int|float $num1, int|float $num2)
{
	return $num1 + $num2;
}

function multiply(int|float $num1, int|float $num2)
{
	return $num1 * $num2;
}

function divide(int|float $num1, int|float $num2)
{
	return $num1 / $num2;
}

function calc(string $op, int|float $num1, int|float $num2)
{
	switch ($op) {
		case '+':
			return sum($num1, $num2);
		case '*':
			return multiply($num1, $num2);
		case '/':
			return divide($num1, $num2);
		default:
			return null;
	}
}
