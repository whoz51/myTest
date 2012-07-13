<?php

class Flags {
	//
	private $flags = 0;
	//
	public function __construct() {}
	
	public function on($position) {
		if (!($this->flags & 1<<$position)) {
			$this->flags ^= 1 << $position;
		}
	}
	
	public function off($position) {
		if (($this->flags & 1<<$position)) {
			$this->flags ^= 1 << $position;
		}
	}
	
	public function watch() {
		echo strrev(sprintf('%b', $this->flags));
	}
	
	public function check($position=0) {
		return $this->flags & 1<<$position;
	}	
}

?>
