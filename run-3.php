<?php

use App\Php8\Construct\OldVersion;

$loader = require 'vendor/autoload.php';

echo "Constructor property promotion\n";
$obj1 = new OldVersion('John');
$obj2 = new OldVersion('Bolton');

dump($obj1);
dump($obj2);

echo "\n";
