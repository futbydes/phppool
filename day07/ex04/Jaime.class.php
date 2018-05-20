<?php

class Jaime {

	public function sleepWith($v) {
		if (get_class($v) == "Tyrion")
			print("Not even if I'm drunk !".PHP_EOL);
		if (get_class($v) == "Sansa")
			print("Let's do this.".PHP_EOL);
		if (get_class($v) == "Cersei")
			print("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
	}

}

?>
