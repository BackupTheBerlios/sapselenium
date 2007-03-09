<?php
abstract class SeleniumTestBase {
	protected $calls = array();
	
	public function __call($method, $params = null) {
		$key = md5(microtime());
		$this->calls[$key]['method'] = $method;
		$this->calls[$key]['params'] = $params;
	}
	
	public function getCalls() {
		return $this->calls;
	}
}