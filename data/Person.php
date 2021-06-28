<?php


class Person
{
    const AUTHOR = "script stone";

    var string $name;
    var ?string $address = null;
    var string $countyr = "indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }


    function  sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "hi my name is $this->name" . PHP_EOL;
        } else {
            echo "hi $name, my name is $this->name" . PHP_EOL;
        }
    }
    function inf0()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}
