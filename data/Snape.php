<?php

namespace Data;

class Snape
{
    public function getConner()
    {
        return 0;
    }
}

class Rectangle extends Snape
{
    public function getConner()
    {
        return 4;
    }

    public function getParrentConner()
    {
        return parent::getConner();
    }
}
