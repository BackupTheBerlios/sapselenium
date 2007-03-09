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

$Id: SAPSeleniumPage.php,v 1.1 2007/03/09 12:03:34 trinculescu Exp $
*/

class SAPSeleniumPage extends SAPage {
	function __construct(SAPSeleniumApplication &$app, $name) {
		parent::__construct($app, $name);
		$this->setContents('title', ucwords(str_replace('/', ' &raquo; ', $this->name)));
		$this->pageName = $this->getName();
		$this->className = get_class($this);		
	}
}