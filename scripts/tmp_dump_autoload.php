<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$composer = json_decode(file_get_contents(__DIR__ . '/../composer.json'), true);
echo "composer.json autoload: ";
var_dump($composer['autoload'] ?? null);

$psr4 = require __DIR__ . '/../vendor/composer/autoload_psr4.php';
echo "vendor/composer/autoload_psr4.php has BhrSdk?: ";
var_dump(array_key_exists('BhrSdk\\\\', $psr4));

