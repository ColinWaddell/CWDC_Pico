<?php // @codingStandardsIgnoreFile

// check PHP version
if (PHP_VERSION_ID < 50306) {
    die('Pico requires PHP 5.3.6 or above to run');
}

// load dependencies
require_once(__DIR__ . '/picocms/vendor/autoload.php');

// instance Pico
$pico = new Pico(
    __DIR__.'/picocms/',    // root dir
    '../config/',  // config dir
    'plugins/', // plugins dir
    '../themes/'   // themes dir
);

// run application
echo $pico->run();
