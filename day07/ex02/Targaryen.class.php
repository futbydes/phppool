<?php

Class Targaryen {

	public function resistsFire() {
		return False;
	}
	public function getBurned () {
		if ($this->resistsFire() == FALSE)
			return "burns alive";
		else
			return "emerges naked but unharmed";
	}

}
?>
