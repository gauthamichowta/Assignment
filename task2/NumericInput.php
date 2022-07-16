<?php
require_once 'TextInput.php';
class NumericInput extends TextInput
{
    public function add($text)
    {
        if (is_numeric($text)) {
            $this->str = $text;
        }
    }
}
