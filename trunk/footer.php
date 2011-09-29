<?php
/**
* Footer page included at the end of each page on user side of the mdoule
*
* @copyright	http://smartfactory.ca The SmartFactory
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		marcan aka Marc-André Lanciault <marcan@smartfactory.ca>
* @package smartcontact
* @version		$Id$
*/

if (!defined("ICMS_ROOT_PATH")) die("ICMS root path not defined");

$icmsTpl->assign("smartcontact_adminpage", icms_getModuleAdminLink('smartcontact'));
$icmsTpl->assign("smartcontact_is_admin", $smartcontact_isAdmin);
$icmsTpl->assign('smartcontact_url', SMARTCONTACT_URL);
$icmsTpl->assign('smartcontact_images_url', SMARTCONTACT_IMAGES_URL);

$xoTheme->addStylesheet(SMARTCONTACT_URL . 'module'.(( defined("_ADM_USE_RTL") && _ADM_USE_RTL )?'_rtl':'').'.css');

$icmsTpl->assign("ref_smartfactory", "SmartContact is developed by The SmartFactory (http://smartfactory.ca), a division of INBOX International inc. (http://inboxinternational.com)");

include_once(ICMS_ROOT_PATH . '/footer.php');

?>