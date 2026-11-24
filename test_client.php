<?php
require __DIR__ . '/vendor/autoload.php';

use OpenAPI\Client\PraemunioClient;

$client = PraemunioClient::sandbox('pk_test', 'sk_test');

echo 'Workspaces API: ' . get_class($client->workspaces()) . PHP_EOL;
echo 'Teams API: ' . get_class($client->teams()) . PHP_EOL;
echo 'Teams Members API: ' . get_class($client->teamsMembers()) . PHP_EOL;
echo 'Folders API: ' . get_class($client->folders()) . PHP_EOL;
echo 'Documents API: ' . get_class($client->documents()) . PHP_EOL;

echo 'All APIs accessible!' . PHP_EOL;