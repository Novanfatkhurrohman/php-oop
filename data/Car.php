<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMainterface
{
    function ismainterface(): bool;
}

interface Car extends HasBrand, IsMainterface
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMainterface
{
    public function drive(): void
    {
        echo "Drive Avanza " . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "toyota";
    }

    public function ismainterface(): bool
    {
        return false;
    }
}
