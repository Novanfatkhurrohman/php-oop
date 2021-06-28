<?php

require_once "data/Snape.php";

use Data\{Snape, Rectangle};

$snape = new Snape();
echo $snape->getConner() . PHP_EOL;

$retangle = new Rectangle();
echo $retangle->getConner() . PHP_EOL;
echo $retangle->getParrentConner() . PHP_EOL;
