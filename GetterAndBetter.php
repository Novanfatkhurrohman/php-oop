<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("handphone");
$category->setExpresive(true);

$category->getName("");
echo "name : {$category->getName()}" . PHP_EOL;
echo "Expresive : {$category->isExpresive()}" . PHP_EOL;
