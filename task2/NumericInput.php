<?php
namespace task2;

require_once 'TextInput.php';

class NumericInput extends TextInput
{
    public function add($text)
    {
        $new_str = preg_replace('/\D/', '', $text);
        $this->str= $this->str.$new_str;
    }
}