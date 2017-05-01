<?php
use Phalcon\Loader;

// Register an autoloader
$loader = new Loader();
$loader->registerDirs(
    array(
        '../app/controllers/',
        '../app/models/'
    )
)->register();