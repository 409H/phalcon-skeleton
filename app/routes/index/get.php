<?php

/**********************************
 ************** G E T *************
 **********************************/

//Application root
$objRouter->add(
    "/",
    array(
        "controller" => "index",
        "action"     => "index"
    )
)->via("GET");

$objRouter->add(
    "/index/about",
    array(
        "controller" => "index",
        "action"     => "about"
    )
)->via("GET");