<?php

use App\Php8\User;

$loader = require 'vendor/autoload.php';

echo "Comma in the arguments";

$user = new User(
    'Name',
    'Last Name',
    50,
);

 echo "\n";
