<?php

class Tyrion {

	public function sleepWith($v) {

		if (get_class($v) == "Jaime")
			print("Not even if I'm drunk !".PHP_EOL);
		if (get_class($v) == "Sansa")
			print("Let's do this.".PHP_EOL);
		if (get_class($v) == "Cersei")
			print("Not even if I'm drunk !".PHP_EOL);

	}

}
?>
