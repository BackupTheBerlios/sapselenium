<?php
class Page_tests extends SAPSeleniumPage {
	public function __construct(SAPSeleniumApplication &$app, $page) {
		parent::__construct($app, $page);
		$this->setLayout(null);
	}
	
	public function doSuite() {
		$s = new SeleniumSuite();
		$this->classes = $s->read();
	}
}