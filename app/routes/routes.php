<?php

use Phalcon\Mvc\Router;

$objRouter = new Router(false);
$objRouter->removeExtraSlashes(true);

include_all_routes($objRouter);

//Put all your routes in app/routers/collections/ directory
function include_all_routes(Router $objRouter, $path = '') {
    if ($path == '') {
        $iterator = new DirectoryIterator(dirname(__FILE__));
    } else {
        $iterator = new DirectoryIterator($path);
    }
    foreach ($iterator as $fileinfo) {
        if ($fileinfo->isDot()) {
            continue;
        }
        if ($fileinfo->isDir()) {
            include_all_routes($objRouter, $fileinfo->getPathname());
        }
        if ($fileinfo->isFile()) {
            $strFileToInclude = $fileinfo->getPathname();
            require_once $strFileToInclude;
        }
    }
}