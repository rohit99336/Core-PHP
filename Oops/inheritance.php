<?php

class TV
{
    public $model = '';
    public $size = '';

    public function Display()
    {
        echo "TV model: {$this->model} and size is: {$this->size}.";
    }

    function __construct($a,$b)
    {
        $this->model = $a;
        $this->size = $b;
        $this->Display();
    }
}

class SmartTV extends TV
{
    
}

$obj = new TV('LG','56')

?>