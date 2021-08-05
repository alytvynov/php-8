<?php

use App\Php8\User;

$loader = require 'vendor/autoload.php';

echo "Named arguments";
$user = (new User('First name', 'Last Name', 1));
dump($user);

$user->setNamedArguments(
    'John',
    age: 20
);
dump($user);

$user->setNamedArguments(
    'John',
    secondName: 'Smith'
);
dump($user);

$user->setNamedArguments(
    ...[
        'name'       => 'JohnName',
        'secondName' => 'SmithLastName',
        'age'        => 25
    ]
);
dump($user);


$user = User::new(
    name: 'First name',
    secondName: 'Last name',
    age: 30
);
dump($user);
echo "\n";
