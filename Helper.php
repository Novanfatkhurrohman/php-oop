<?php

require_once "helper/Helper.php";

use Helper\MathHelper;


echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Novan";
echo MathHelper::$name;

$number = MathHelper::sum(10, 10, 10, 10, 10,);
echo "number : $number" . PHP_EOL;
