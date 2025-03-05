<?php

use Illuminate\Support\Collection;
use Illuminate\Support\HigherOrderCollectionProxy;

require_once __DIR__.'/vendor/autoload.php';

$collection = new Collection([fn() => throw new \RuntimeException()]);

new HigherOrderCollectionProxy($collection, 'each')->__invoke();
