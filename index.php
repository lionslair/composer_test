<?php
// This will initialize composer's auotloader
$loader = require_once __DIR__ . '/vendor/autoload.php';
// Setup our username and password
$user = 'nathan@lionslair.net.au';
$pass = 'vxG7+f44ZDzfh7sQC5/WvIMbk+cbIpp55nSODERcKC46We8MgOOoHF4wgDoP6uzcjsp8GCXyZm5l';
// Initiates a new guzzle client
$client = new \Components5\CloudSDK\Client($user, $pass);

echo '<pre>'. var_export($client->getSites(), TRUE) .'</pre>';

echo '<pre>'. var_export($client->getSiteTasks('devcloud:lionslair'), TRUE) .'</pre>';
