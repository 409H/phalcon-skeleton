<?php
use Phalcon\Mvc\Application;

define("APP_PATH", dirname(__DIR__));

try {
    require_once APP_PATH ."/app/config/loader.php";
    require_once APP_PATH ."/app/config/services.php";

    // Handle the request
    $application = new Application($objDi);
    echo $application->handle()->getContent();
} catch (Exception $e) {
    //@todo - Make this go to a 500 page to the enduser and log the message to alert developers...
    echo "Exception: ", $e->getMessage();
}