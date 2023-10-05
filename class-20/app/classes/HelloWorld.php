<?php


namespace App\classes;


class HelloWorld
{
    public $name;
    public function __construct()
    {
        $this->name = "kamal";
    }
    public function getName(){
        echo "Hello World form {$this->name}";
    }
}