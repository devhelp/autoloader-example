<?php

define('ROOT_DIR', __DIR__.'/..');
define('LIB_DIR', ROOT_DIR.'/lib');

require_once ROOT_DIR.'/vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$classLoader = new UniversalClassLoader();

$classLoader->registerNamespaces(array(
    'Devhelp' => LIB_DIR,
    'Acme' => LIB_DIR
));

$classLoader->registerPrefixes(array(
    'Devhelp_' => LIB_DIR,
    'Acme_' => LIB_DIR
));

//$classLoader->registerNamespaceFallback(LIB_DIR);
//$classLoader->registerPrefixFallback(LIB_DIR);

$classLoader->register();