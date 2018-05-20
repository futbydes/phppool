<?php
	if($_POST['submit'] == 'OK' && $_POST['login'] != "" && $_POST['passwd'] != "") {
		if (!file_exists('../private/passwd'))
			mkdir('../private');
		$array = unserialize(file_get_contents('../private/passwd'));
		if ($array != NULL || $array != "") {
			foreach ($array as $elem) {
				if ($elem['login'] == $_POST['login']) {
					echo "ERROR\n";
					return ;
				}
			}
		}
		$getusr['login'] = $_POST['login'];
		$getusr['passwd'] = hash('whirlpool', $_POST['passwd']);
		$array[] = $getusr; 
		file_put_contents('../private/passwd', serialize($array));
		echo "OK\n";
	}
	else
		echo "ERROR\n";

?>