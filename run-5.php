<?php

use App\Php8\Inheritance\ChildClass;
use App\Php8\Inheritance\ParentClass;

$loader = require 'vendor/autoload.php';

echo "Inheritance static self parent\n";
dump(ParentClass::getSelf());
dump(ParentClass::getStatic());

dump(ChildClass::getSelf());
dump(ChildClass::getStatic());
dump(ChildClass::getParent());

echo "\n";
