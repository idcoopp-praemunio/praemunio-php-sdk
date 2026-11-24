<?php
require __DIR__ . '/vendor/autoload.php';
$c = new OpenAPI\Client\PraemunioClient('pk_test', 'sk_test');
echo get_class($c) . "\n";
echo $c::sandbox('pk', 'sk') ? "sandbox OK\n" : "FAIL\n";
echo $c::live('pk', 'sk') ? "live OK\n" : "FAIL\n";