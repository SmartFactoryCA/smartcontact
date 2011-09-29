<?php
/**
* Common file of the module included on all pages of the module
*
* @copyright	http://smartfactory.ca The SmartFactory
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		marcan aka Marc-André Lanciault <marcan@smartfactory.ca>
* @version		$Id$
*/

if (!defined("XOOPS_ROOT_PATH")) die("Root path not defined");

if(!defined("SMARTCONTACT_DIRNAME"))	define("SMARTCONTACT_DIRNAME", 'smartcontact');
if(!defined("SMARTCONTACT_URL"))		define("SMARTCONTACT_URL", XOOPS_URL.'/modules/'.SMARTCONTACT_DIRNAME.'/');
if(!defined("SMARTCONTACT_ROOT_PATH"))	define("SMARTCONTACT_ROOT_PATH", XOOPS_ROOT_PATH.'/modules/'.SMARTCONTACT_DIRNAME.'/');
if(!defined("SMARTCONTACT_IMAGES_URL"))	define("SMARTCONTACT_IMAGES_URL", SMARTCONTACT_URL.'/images/');
if(!defined("SMARTCONTACT_ADMIN_URL"))	define("SMARTCONTACT_ADMIN_URL", SMARTCONTACT_URL.'admin/');

// Include the common language file of the module
icms_loadLanguageFile('smartcontact', 'common');

/** Include SmartObject Framework **/
include_once XOOPS_ROOT_PATH.'/modules/smartobject/include/common.php';

include_once(SMARTCONTACT_ROOT_PATH . "include/functions.php");

// Creating the SmartModule object
$smartcontact_module =& smart_getModuleInfo(SMARTCONTACT_DIRNAME);

// Find if the user is admin of the module
$smartcontact_isAdmin = smart_userIsAdmin(SMARTCONTACT_DIRNAME);

$myts = MyTextSanitizer::getInstance();
$smartcontact_moduleName = $smartcontact_module->getVar('name');

// Creating the SmartModule config Object
$smartcontact_config =& smart_getModuleConfig(SMARTCONTACT_DIRNAME);
?>