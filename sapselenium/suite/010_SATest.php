<?php
class SATest extends SeleniumTestBase {
	public function testOpen() {
		$this->open('/~andi/portal');
	}
	public function testLogin() {
		$this->assertTextPresent('Sign In');
		$this->clickAndWait('link=Sign In');
		$this->type('//input[@id="LoginUserName"]', 'alexandru');
		$this->type('//input[@id="UserPasswordLogin"]', '123456');
		$this->clickAndWait('//input[@id="bSignIn"]');
	}

	public function testBrowse() {
		$this->clickAndWait('//a[contains(@href, "p=browse")]');
	}
}