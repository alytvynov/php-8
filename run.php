<?php

use App\Php8\App;

$loader = require 'vendor/autoload.php';

echo "--------------------------------------------------\n";
$app = (new App('A', 'B', 1));
dump($app);
$app->setNamedArguments(
    'Anton',
    age: 19
);
dump($app);
$app->setNamedArguments(
    secondName: 'Lytvynov'
);
dump($app);
$app->setNamedArguments(
    ...[
        'name'       => 'ZDQ',
        'secondName' => 'LTV',
        'age'        => 22
    ]
);
dump($app);

dump(
    App::new(
        name: 'First name',
        secondName: 'Last name',
        age: 30
    )
);
echo "\n";
