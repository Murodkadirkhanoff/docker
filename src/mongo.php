<?php
require "vendor/autoload.php";
$client = new MongoDB\Client(
    'mongodb+srv://<username>:<password>@<cluster-address>/test?w=majority'
);
$db = $client->test;