<?php
require_once 'NumericInput.php';
require_once 'TextInput.php';
$numericInput = new NumericInput();
$numericInput->add('1');
echo $numericInput->getValue();
$testInput = new TextInput();
$testInput->add('a');
echo $testInput->getValue();
?>