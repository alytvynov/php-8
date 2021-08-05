<?php

use App\Php8\Attributes\ClassWithAttribute;

$loader = require 'vendor/autoload.php';

echo "Attributes\n";
$obj = new ClassWithAttribute();
dump($obj);

$reflectionClassObj = new ReflectionClass($obj);
dump($reflectionClassObj);

foreach ($reflectionClassObj->getAttributes() as $attribute) {
    dump($attribute->getName());
    dump($attribute->getArguments());
    dump($attribute->newInstance());
}
echo "\n";
