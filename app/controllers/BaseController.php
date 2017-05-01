<?php

use Phalcon\Mvc\Controller;

class BaseController extends Controller
{
    private $objConfig;

    public function initialize()
    {
        //Set controller properties that will be used throughout
        $this->objConfig = $this->di->get("config");

        //Set the template view params
        $this->view->strSiteTitle = $this->objConfig->general->site_title;
    }
}