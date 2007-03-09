<?php
final class SeleniumConfig {
	private $iniFile = null;

	public function __construct($iniFile) {
		$this->iniFile = $iniFile;
		$this->init();
	}
	
	public function init() {
		$ini = parse_ini_file($this->iniFile);
		foreach($ini as $key => $value) {
			$this->setValue($this->camelize($key), $value);
		}
	}
	
	public function camelize($word) {
		$camel = explode('_', $word);
		$camelized = strtolower($camel[0]);
		for($i = 1; $i < count($camel); $i++) {
			$camelized .= ucfirst(strtolower($camel[$i]));
		}
		return $camelized;
	}
	
	public function getValue($key) {
		return $this->$key;
	}
	
	public function setValue($key, $value) {
		if ($key) $this->$key = $value;
	}
}