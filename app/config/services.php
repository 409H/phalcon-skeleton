<?php

use Phalcon\Config\Adapter\Ini as ConfigIni;
use Phalcon\Mvc\View as View;

$objDi = new \Phalcon\DI\FactoryDefault;

/***********************************************************************************************************************
 ****************************************** R E G I S T E R   S E R V I C E S ******************************************
 **********************************************************************************************************************/

//Load the config file as a service
$objDi->set("config", function() {
    return new ConfigIni(APP_PATH . "/app_config.ini");
});

//Load the view as a service (we are using Volt)
$objDi->set("view", function() {
    $objView = new View();
    //Set all the paths for each view type
    $objView->setViewsDir(APP_PATH .'/app/view/views');
    $objView->setPartialsDir(APP_PATH .'/app/view/partials/');

    //Now set the view defaults
    $objView->setMainView("index");
    $objView->setLayout("main");

    //Register the volt engine
    $objView->registerEngines(
        array(
            ".volt" => function($objView, $objDi) {
                $objVolt = new Phalcon\Mvc\View\Engine\Volt($objView, $objDi);
                //Configure the volt engine
                $objVolt->setOptions(
                    [
                        "compiledPath" => $objDi->get("config")->volt->compiled_path,
                        "compiledExtension" => $objDi->get("config")->volt->compiled_extension,
                        "compiledSeparator" => $objDi->get("config")->volt->compiled_separator,
                        "stat" => $objDi->get("config")->volt->stat,
                        "compileAlways" => $objDi->get("config")->volt->compile_always,
                        "prefix" => $objDi->get("config")->volt->prefix,
                        "autoescape" => $objDi->get("config")->volt->autoescape
                    ]
                );
                return $objVolt;
            }
        )
    );

    $objView->cache(false);
    return $objView;
});