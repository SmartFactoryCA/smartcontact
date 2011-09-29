<?php

/**
* $Id: index.php 1447 2008-04-06 04:41:21Z malanciault $
* Module: SmartContact
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

include_once("admin_header.php");

$op = '';
if (isset($_GET['op'])) $op = $_GET['op'];
if (isset($_POST['op'])) $op = $_POST['op'];

switch ($op) {

	default:
		smart_xoops_cp_header();

		smart_adminMenu(0, _AM_SOBJECT_INDEX);

		echo "<p>Coming soon...</p>";

		smart_modFooter();
		xoops_cp_footer();
	break;
}
?>