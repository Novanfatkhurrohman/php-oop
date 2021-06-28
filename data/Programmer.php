<?php

class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
}
class FrontEndProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}
function sayHelloProgrammer(Programmer $programmer)
{
    //echo "hello Programmer $programmer->name " . PHP_EOL;

    if ($programmer instanceof BackendProgrammer) {
        echo "Hello BackendProgrammer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontEndProgrammer) {
        echo "Hello FrontEndProgrammer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "hello Programmer $programmer->name" . PHP_EOL;
    }
}
