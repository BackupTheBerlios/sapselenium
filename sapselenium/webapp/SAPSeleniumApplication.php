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

$Id: SAPSeleniumApplication.php,v 1.1 2007/03/09 12:03:34 trinculescu Exp $
*/

require_once(SA_WEBAPP_DIR . 'SAPSeleniumPage.php');

class SAPSeleniumApplication extends SApplication {
	function __construct() {
		$this->home = dirname(__FILE__);
		parent::__construct();
	}

	function __destruct() {}
}
