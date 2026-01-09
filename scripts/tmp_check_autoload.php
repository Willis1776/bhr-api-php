<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

var_dump(class_exists('BhrSdk\\ObjectSerializer'));
var_dump(method_exists('BhrSdk\\Api\\TrainingApi', 'listTrainingCategories'));

