<?php
/*
+-----------------------------------------------------------------------+
| SkyApp - The PHP Application Framework.                               |
| http://www.skyweb.ro/                                                 |
+-----------------------------------------------------------------------+
| This source file is released under LGPL license, available through    |
| the world wide web at http://www.gnu.org/copyleft/lesser.html.        |
| This library is distributed WITHOUT ANY WARRANTY. Please see the LGPL |
| for more details.                                                     |
+-----------------------------------------------------------------------+
| Authors: Andi Trînculescu <andi@skyweb.ro>                            |
+-----------------------------------------------------------------------+

$Id: startup.php,v 1.1 2007/03/09 12:03:33 trinculescu Exp $
*/

define('SA_CORE_DIR', 'lib/');
define('SA_LIB_DIR', 'lib/');
define('SA_CLASSES_DIR', 'classes/');
define('SA_INI_DIR', 'ini/');
define('SA_SMARTY_DIR', SA_LIB_DIR . 'Smarty-2.6.14/libs/');
define('SA_WEBAPP_DIR', 'webapp/');
define('SA_LOGS_DIR', 'logs/');
define('SA_SECRET_KEY', 'monaco');
define('SA_SESSION_NAME', 'sid');
/**
 * If this is set to false, the SID will be appended to the URL if the client does not accept cookies
 */
define('SA_SESSION_FORCE_COOKIES', true);

define('INI_FILE', 'ini/selenium.ini');

//includes for SA
require_once(SA_SMARTY_DIR	.	'Smarty.class.php');

require_once(SA_CORE_DIR	.	'SADebug.php');
require_once(SA_CORE_DIR	.	'SAExceptions.php');
require_once(SA_CORE_DIR	.	'SAUrl.php');
require_once(SA_CORE_DIR	.	'SAIPage.php');
require_once(SA_CORE_DIR	.	'SAPage.php');
require_once(SA_CORE_DIR	.	'SAPageHandler.php');
require_once(SA_CORE_DIR	.	'SARequest.php');
require_once(SA_CORE_DIR	.	'SALog.php');
require_once(SA_CORE_DIR	.	'SApplication.php');

require_once(SA_CLASSES_DIR	.	'SeleniumConfig.php');
require_once(SA_CLASSES_DIR	.	'SeleniumSuite.php');
require_once(SA_CLASSES_DIR	.	'SeleniumTestBase.php');

//includes for webapp
require_once(SA_WEBAPP_DIR	.	'SAPSeleniumApplication.php');

error_reporting(E_ALL & ~E_NOTICE);

function __autoload($className) {
	include_once($className);
}