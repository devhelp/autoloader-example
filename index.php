<?php

require_once __DIR__.'/app/bootstrap.php';

/***********************
 * AUTOLOADER TEST *
 ***********************/

echo new \Devhelp\Namespaced\AutoloaderTest() . PHP_EOL;
echo new \Acme\Namespaced\AutoloaderTest() . PHP_EOL;

echo new Devhelp_Prefixed_AutoloaderTest() . PHP_EOL;
echo new Acme_Prefixed_AutoloaderTest() . PHP_EOL;

/*****************************
 * AUTOLOADER TEST - END *
 *****************************/