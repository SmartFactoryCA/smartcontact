<?php

/**
* $Id: menu.php 1447 2008-04-06 04:41:21Z malanciault $
* Module: SmartContact
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/


$adminmenu[0]['title'] = _AM_SMARTCONTACT_INDEX;
$adminmenu[0]['link'] = "admin/index.php";

if (isset($xoopsModule)) {
	$i = -1;

	$i++;
	$headermenu[$i]['title'] = _PREFERENCES;
	$headermenu[$i]['link'] = '../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $xoopsModule->getVar('mid');

	$i++;
	$headermenu[$i]['title'] = _CO_ICMS_GOTOMODULE;
	$headermenu[$i]['link'] = ICMS_URL . '/modules/smartcontact/';

	$i++;
	$headermenu[$i]['title'] = _CO_SOBJECT_UPDATE_MODULE;
	$headermenu[$i]['link'] = XOOPS_URL . "/modules/system/admin.php?fct=modulesadmin&op=update&module=" . $xoopsModule->getVar('dirname');

	$i++;
	$headermenu[$i]['title'] = _AM_SOBJECT_ABOUT;
	$headermenu[$i]['link'] = SMARTCONTACT_URL . "admin/about.php";
}
?>
