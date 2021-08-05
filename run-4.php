<?php

use App\Php8\User;

$loader = require 'vendor/autoload.php';

echo "Constructor property promotion\n";
$user = new User('John', 'Smith', 30);

dump($user->setSomething(1));
dump($user->setSomething('1'));
dump($user->setSomething(true));

$user->setMoney(20);
dump($user);

$user->setMoney(20.00);
dump($user);

/** Here we ll get the Fatal Error */
$user->setMoney('Hey Hey');
echo "\n";
