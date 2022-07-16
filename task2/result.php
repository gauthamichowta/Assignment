<?php
require_once 'NumericInput.php';

$numericInput = new task2\NumericInput();
$numericInput->add('1');
$numericInput->add('a');
$numericInput->add('7');
$numericInput->add('b');
echo $numericInput->getValue();
