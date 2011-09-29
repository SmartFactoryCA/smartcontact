<?php
/**
* Contact form page
*
* @copyright	http://smartfactory.ca The SmartFactory
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		marcan aka Marc-André Lanciault <marcan@smartfactory.ca>
* @package smartcontact
* @version		$Id$
*/

include_once 'header.php';

$xoopsOption['template_main'] = 'smartcontact_index.html';
include_once ICMS_ROOT_PATH . '/header.php';

$smartcontact_form_handler = icms_getModuleHandler('form');

/** Use a naming convention that indicates the source of the content of the variable */
$clean_op = '';

if (isset($_GET['op'])) $clean_op = $_GET['op'];
if (isset($_POST['op'])) $clean_op = $_POST['op'];

/** Again, use a naming convention that indicates the source of the content of the variable */
$clean_form_id = isset($_GET['form_id']) ? intval($_GET['form_id']) : 0 ;

/** Create a whitelist of valid values, be sure to use appropriate types for each value
 * Be sure to include a value for no parameter, if you have a default condition
 */
$valid_op = array ('addform','');
/**
 * Only proceed if the supplied operation is a valid operation
 */
if (in_array($clean_op,$valid_op,true)){
  switch ($clean_op) {
	case "mod":
		$formObj = $smartcontact_form_handler->get($clean_form_id);
  		if ($clean_form_id > 0 && $formObj->isNew()) {
			redirect_header(icms_getPreviousPage('index.php'), 3, _NOPERM);
		}
		editform($formObj);
		break;

	case "addform":
        if (!$xoopsSecurity->check()) {
        	redirect_header(icms_getPreviousPage('index.php'), 3, _MD_IMBLOGGING_SECURITY_CHECK_FAILED . implode('<br />', $xoopsSecurity->getErrors()));
        }
         include_once ICMS_ROOT_PATH.'/kernel/icmspersistablecontroller.php';
        $controller = new IcmsPersistableController($smartcontact_form_handler);
		$controller->storeFromDefaultForm(_MD_IMBLOGGING_POST_CREATED, _MD_IMBLOGGING_POST_MODIFIED);
		break;

	default:

		$formObj = $smartcontact_form_handler->create();
		$sform = $formObj->getSecureForm(_MD_SMARTCONTACT_SUBMIT, 'addform');
		$sform->assign($icmsTpl, 'smartcontact_form');

		break;
	}
}
//$icmsTpl->assign('smartcontact_module_home', icms_getModuleName(true, true));

include_once 'footer.php';
?>