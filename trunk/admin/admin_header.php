<?php

/**
* $Id: admin_header.php 1447 2008-04-06 04:41:21Z malanciault $
* Module: SmartContact
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("SMARTCONTACT_NOCPFUNC")) {
	include_once '../../../include/cp_header.php';
}

include_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";

include_once XOOPS_ROOT_PATH.'/modules/smartcontact/include/common.php';

if( !defined("SMARTCONTACT_ADMIN_URL") ){
	define('SMARTCONTACT_ADMIN_URL', SMARTCONTACT_URL . "admin/");
}

if( !defined("SMARTCONTACT_ADMIN_ROOT_PATH") ){
	define('SMARTCONTACT_ADMIN_ROOT_PATH', SMARTCONTACT_ROOT_PATH . "admin/");
}
smart_loadCommonLanguageFile();

?>