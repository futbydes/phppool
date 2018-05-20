<?php
	if($_POST['submit'] == 'OK' && $_POST['login'] != "" &&
		$_POST['oldpw'] != "" && $_POST['newpw'] != "" &&
		file_exists('../private/passwd')) {
		$array = unserialize(file_get_contents('../private/passwd'));
		if ($array != NULL || $array != "") {
			foreach ($array as $elem => $n ) {
				if ($n['login'] == $_POST['login']) {
					if ($n['passwd'] == hash('whirlpool', $_POST['oldpw'])){
						$array[$elem]['passwd'] = hash('whirlpool', $_POST['newpw']);
						$flag = 1;
					}
					else {
						echo "ERROR\n";
						return ;
					}
				}
			}
			if ($flag != 1) {
				echo "ERROR\n";
				return ;
			}
		}
		file_put_contents('../private/passwd', serialize($array));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>