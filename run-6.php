<?php

echo "Match expression\n";
echo match (8.0) {
    8 => 'integer 8',
    8.0 => 'float 8.0',
    '8.0' => 'string 8.0',
};

echo "\n";
