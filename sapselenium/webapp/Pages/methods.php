<?php
class Page_methods extends SAPSeleniumPage {
	public function __construct(SAPSeleniumApplication &$app, $name) {
		parent::__construct($app, $name);
		$this->setLayout(null);
		$this->doTests();
	}
	
	public function doTests() {
		$testFile = $this->app->GP('test');
		$c = new SeleniumConfig(INI_FILE);
		$regs = array();
		ereg('^[0-9]+_(.*)\.php$', $testFile, $regs);
		require("{$c->testsPath}/$testFile");
		$obj = new $regs[1];
		$r = new ReflectionClass($obj);
		$m = $r->getMethods();
		foreach($m as $method) {
			$methodName = $method->getName();
			if (ereg('^test(.*)', $methodName)) {
				$obj->$methodName();
			}
		}
		$this->className = $regs[1];
		$this->calls = $obj->getCalls();
	}
}