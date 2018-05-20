<?php
function auth($login, $passwd) {
	$array = unserialize(file_get_contents('../private/passwd'));
	if ($array != NULL) {
		foreach ($array as $elem) {
			if ($elem['login'] == $login &&
				$elem['passwd'] == hash('whirlpool', $passwd)) {
				return TRUE;
				}
			}
		}
	return FALSE;
}
?>