<?php
require __DIR__.'/vendor/autoload.php';


use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;


// database
$factory = (new Factory)
        ->withServiceAccount('pertanian-93584-firebase-adminsdk-1r7mu-da47d3dbae.json')
        ->withDatabaseUri('https://pertanian-93584-default-rtdb.firebaseio.com/');

    $database = $factory->createDatabase();
    $auth = $factory->createAuth();

?>