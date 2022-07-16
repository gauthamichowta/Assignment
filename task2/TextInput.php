<?php
namespace task2;

class TextInput
{
    public $str = '';

    public function add($text)
    {
        $this->str = $this->str.$text;
    }

    public function getValue()
    {
        return $this->str;
    }
}
