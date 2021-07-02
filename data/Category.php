<?php

class Category
{

    private string $name;
    private bool $expresive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpresive(): bool
    {
        return $this->expresive;
    }

    public function setExpresive(bool $expresive): void
    {
        $this->expresive = $expresive;
    }
}
