<?php
final class SeleniumSuite {
	public function __construct() {}
	public function read() {
		$c = new SeleniumConfig(INI_FILE);
		$dh = opendir($c->testsPath);
		rewinddir($dh);
		$classes = array();
		while ($fileName = readdir($dh)) {
			$regs = array();
			if (ereg('^[0-9]+_(.*)\.php$', $fileName, $regs)) {
				$class = array();
				$class['file_name'] = $fileName;
				$class['name'] = $regs[1];				
				$classes[] = $class;
			}
		}
		closedir($dh);
		
		return $classes;
	}
}