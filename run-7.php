<?php

use App\Php8\User;

$loader = require 'vendor/autoload.php';

echo "Nullsafe";

$user = new User('Name', 'Last Name', 50);
dump($user->getSomeMixed());
dump($user?->getSomeMixed());
dump($user?->getSomeMixed() ?? 'Insted of null');

echo "\n";
