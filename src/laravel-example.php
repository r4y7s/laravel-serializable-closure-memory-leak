<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/helper.php';

use Laravel\SerializableClosure\SerializableClosure;

$closure = fn() => 'james';

// Recommended
SerializableClosure::setSecretKey('secret');

for ($i = 0; $i < PHP_INT_MAX; $i++) {
    echo_memory_usage($i);

    $s = serialize(new SerializableClosure($closure));
    $u = unserialize($s);

    unset($s);
    unset($u);
}
