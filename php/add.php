<?php

use MeiliSearch\Client;

require __DIR__.'/vendor/autoload.php';

$client = new Client('http://127.0.0.1:7700');
$client->index('tester')->addDocuments([
    'id' => '1234',
    'name' => 'aaaaaa',
]);
