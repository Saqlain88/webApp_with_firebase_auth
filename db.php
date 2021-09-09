<?php

require __DIR__ . '/vendor/autoload.php';


use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
    ->withServiceAccount('webapp-10ae2-firebase-adminsdk-l5pvj-a2d3a9f1d7.json')
    ->withDatabaseUri('https://webapp-10ae2-default-rtdb.firebaseio.com');


$database = $factory->createDatabase();
$auth = $factory->createAuth();
