<?php

use MeiliSearch\Client;

require __DIR__.'/vendor/autoload.php';

$client = new Client('http://127.0.0.1:7700');

// 看着是 addDocuments 添加，实际上是更新和添加的复合接口，不要被 add 误导。
// 必须是一组数据，而不是单个（即使只有一个也要是数组）。
$client->index('tester')->addDocuments([
    [
        'id' => '1234',
        'name' => 'aaaaaa',
    ],
]);
