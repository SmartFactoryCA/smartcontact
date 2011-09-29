<?php

/**
* Classes responsible for managing Propertybase contact objects
*
* @copyright	INBOX International inc.
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		marcan aka Marc-André Lanciault <mal@inboxintl.com>
* @package		propertybase
* @version		$Id$
*/

if (!defined("ICMS_ROOT_PATH")) die("ICMS root path not defined");

// including the IcmsPersistabelObject
include_once SMARTCONTACT_ROOT_PATH . 'class/icmspersistableobjecthandler.php';

class SmartcontactForm extends IcmsPersistableObject {

	/**
	 * Constructor
	 *
	 * @param object $handler PropertybasePostHandler object
	 */
	public function __construct(& $handler) {
		global $xoopsConfig;

		$this->IcmsPersistableObject($handler);

		$this->quickInitVar('form_id', XOBJ_DTYPE_INT, true);
		$this->quickInitVar('first_name', XOBJ_DTYPE_TXTBOX, true);
		$this->quickInitVar('last_name', XOBJ_DTYPE_TXTBOX, true);
		$this->quickInitVar('title', XOBJ_DTYPE_TXTBOX);
		$this->quickInitVar('company', XOBJ_DTYPE_TXTBOX);
		$this->quickInitVar('city', XOBJ_DTYPE_TXTBOX);
		$this->quickInitVar('phone', XOBJ_DTYPE_TXTBOX);
		$this->quickInitVar('email', XOBJ_DTYPE_TXTBOX, true);
		$this->quickInitVar('web_site', XOBJ_DTYPE_TXTBOX);
		$this->quickInitVar('message', XOBJ_DTYPE_TXTAREA, true);

		/*
		$this->setControl('FirstName', array('name'=>'text', 'size'=>40));
		$this->setControl('LastName', array('name'=>'text', 'size'=>40));
		$this->setControl('PersonEmail', array('name'=>'text', 'size'=>40));
		$this->setControl('Phone', array('name'=>'text', 'size'=>40));
		*/
	}
}
class SmartcontactFormHandler extends IcmsPersistableObjectHandler {

	/**
	 * Constructor
	 */
	public function __construct(& $db) {
		$this->IcmsPersistableObjectHandler($db, 'form', 'form_id', 'form_id', '', 'smartcontact');
	}
}
?>