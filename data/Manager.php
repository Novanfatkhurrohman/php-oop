<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name My name Manager $this->name" . PHP_EOL;
    }
}

class ViceManager extends Manager
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "vp");
    }

    function sayHello(string $name): void
    {
        echo "Hi $name My name VP $this->name" . PHP_EOL;
    }
}
