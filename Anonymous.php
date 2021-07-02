<?php

interface HelloWord
{
    function SayHello(): void;
}


$helloWorld = new class("novan") implements HelloWord
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function SayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->SayHello();
