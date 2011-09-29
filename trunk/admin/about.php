<?php

/**
* $Id: about.php 1447 2008-04-06 04:41:21Z malanciault $
* Module: SmartObject
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
//
include_once("admin_header.php");

include_once(SMARTOBJECT_ROOT_PATH . "class/smartobjectabout.php");
$aboutObj = new SmartobjectAbout();
$aboutObj->render();

?>