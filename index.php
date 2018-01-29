<?php

function add(float $first, float $second) : float {
	return($first + $second);
}

function subtract(float $minuend, float $subtrahend) : float {
	return($minuend - $subtrahend);
}

function multiply(float $first, float $second) : float {
	return($first * $second);
}

function divide(float $dividend, float $divisor) {
	return($dividend / $divisor);
}

function main(float $first, float $second) : void {
	echo "Addition: " . add($first, $second) . PHP_EOL;
	echo "Subtraction: " . subtract($first, $second) . PHP_EOL;
	echo "Multiplication: " . multiply($first, $second) . PHP_EOL;
	echo "Division: " . divide($first, $second) . PHP_EOL;
}

main (42, 5);