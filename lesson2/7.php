<?php

class Magic
{
    protected $attributes = [];

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if (isset($this->attributes[$name])) {
            return $this->attributes[$name];
        } else {
            throw new Exception('Var not exists');
        }
    }
}


$obj = new Magic();

$obj->qwerty = 'qwe';
$obj->name = 'qwe';
echo $obj->qwerty2;

// print_r($obj);
