<?php

class NightsWatch {

	public $fighters = [];

	public function recruit($v) {
		if ($v instanceof IFighter)
			$this->fighters[] = $v;
	}

	public function fight() {
		foreach ($this->fighters as $elem) {
			$elem->fight();
		}
	}

}

?>
