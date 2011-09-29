<?php
 /**
 * SmartContact xoops_version file
 *
 * @copyright	Copyright 2010 INBOX International http://inboxinternational.com
 * @since		1.0
 * @package		SmartContact
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @version		$Id: Address.php 1000 2010-02-16 00:55:00Z marcan $
 */

$modversion['name'] = "SmartContact";
$modversion['version'] = 1.0;
$modversion['author'] = "The SmartFactory [www.smartfactory.ca]";
$modversion['description']	= _MI_SMARTCONTACT_MODULE_DESC;
$modversion['credits'] = "The SmartFactory";
$modversion['license'] = "GNU General Public License (GPL)";
$modversion['help']	= "";
$modversion['official']	= 0;
$modversion['image'] = "images/module_logo.gif";
$modversion['dirname']	= "smartcontact";

/**  Images information  */
$modversion['iconsmall'] = "images/icon_small.png";
$modversion['iconbig'] = "images/icon_big.png";
$modversion['image'] = "images/icon_big.png"; /* for backward compatibility */

// Added by marcan for the About page in admin section
$modversion['developer_lead'] = "marcan [Marc-André Lanciault]";
$modversion['developer_contributor'] = "";
$modversion['developer_website_url'] = "http://inboxinternational";
$modversion['developer_website_name'] = "INBOX International";
$modversion['developer_email'] = "mal@inboxintl.com";
$modversion['status_version'] = "Beta";
$modversion['status'] = "Beta";
$modversion['date'] = "Unreleased";

$modversion['warning'] = _CO_SOBJECT_WARNING_BETA;

$modversion['demo_site_url'] = "";
$modversion['demo_site_name'] = "";
$modversion['support_site_url'] = "";
$modversion['support_site_name'] = "";
$modversion['submit_bug'] = "";
$modversion['submit_feature'] = "";

$modversion['author_word'] = "";

// Admin things
$modversion['hasAdmin']	= 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Search
$modversion['hasSearch'] = 0;

// Menu
$modversion['hasMain'] = 0;

// Templates
$i=0;

$i++;
$modversion['templates'][$i]['file']	= 'smartcontact_header.html';
$modversion['templates'][$i]['description'] = 'Template header';

$i++;
$modversion['templates'][$i]['file']	= 'smartcontact_footer.html';
$modversion['templates'][$i]['description'] = 'Template footer';

$i++;
$modversion['templates'][$i]['file']	= 'smartcontact_index.html';
$modversion['templates'][$i]['description'] = 'Contact form';

// Config options
$i = 0;

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_email';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_EMAIL';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_EMAILDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'lead@mycompany.com';

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_subj';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_SUBJ';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_SUBJDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'Lead Created';

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_hracc';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_HRACC';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_HRACCDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'mycompany';

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_hrtk';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_HRTK';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_HRTKDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_msg';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_MSG';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_MSGDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'Thank you for contacting us. We will get back to you shortly.';

/*
$i++;
$modversion['config'][$i]['name'] = 'smartcontact_intro_message';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_INTRO_MSG';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_INTRO_MSG_DSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_register_title';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_REGISTER_TITLE';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_REGISTER_TITLE_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_register_image';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_REGISTER_IMAGE';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_REGISTER_IMAGE_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';


$i++;
$modversion['config'][$i]['name'] = 'smartcontact_register_footer';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_REGISTER_FOOTER';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_REGISTER_FOOTER_DSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_block_header';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_BLOCK_HEADER';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_BLOCK_HEADER_DSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'smartcontact_block_footer';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_BLOCK_FOOTER';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_BLOCK_FOOTER_DSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'inquiero_url';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_INQUIERO_URL';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_INQUIERO_URLDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'http://www.inquiero.com';

$i++;
$modversion['config'][$i]['name'] = 'inquiero_login';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_INQUIERO_LOGIN';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_INQUIERO_LOGINDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'inquiero_bgcolor';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_INQUIERO_BGCOLOR';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_INQUIERO_BGCOLORDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'inquiero_txtcolor';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_INQUIERO_TXTCOLOR';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_INQUIERO_TXTCOLORDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'inquiero_button';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_INQUIERO_BUTTON';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_INQUIERO_BUTTONSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'inquiero_mode';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_INQUIERO_MODE';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_INQUIERO_MODESC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'allow_anonymous';
$modversion['config'][$i]['title'] = '_MI_SMARTCONTACT_INQUIERO_ANONYMOUS';
$modversion['config'][$i]['description'] = '_MI_SMARTCONTACT_INQUIERO_ANONYMOUSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = true;

*/

?>