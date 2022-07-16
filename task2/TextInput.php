<?php

class TextInput
{
    protected $str = '';

    public function add($text)
    {
        $this->str = $text;
    }

    public function getValue()
    {
        return $this->str;
    }
}
