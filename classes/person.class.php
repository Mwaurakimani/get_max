<?php

class person
{
    public $name = null;
    public $age = null;
    
    public function __construct ($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function user ()
    {
        echo "Name: ".$this->name."\n"."age :".$this->age;
    }
    
}