<?php

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);
 //Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
//:: is used to call a method within the static Base class within fat-free
$f3 = Base::instance();

//Define a default route
//
$f3->route('GET /', function() {
    echo '<h1>Hello, World</h1>';
    }
);

//Run fat free
// -> is invoking the run() method in the fat-free
$f3->run();