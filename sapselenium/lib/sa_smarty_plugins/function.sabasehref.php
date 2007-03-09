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

$Id: function.sabasehref.php,v 1.1 2007/03/09 12:03:34 trinculescu Exp $
*/

/*! \brief Smarty plugin for generating the absolute path of the web application within the template
 * 
 */

function smarty_function_sabasehref($params, &$smarty) {
	return SAUrl::baseHref();
}