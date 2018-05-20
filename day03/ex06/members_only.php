<?php
if ($_SERVER['PHP_AUTH_USER'] != 'zaz' || $_SERVER['PHP_AUTH_PW'] != 'jaimelespetitsponeys') {
	header('WWW-Authenticate: Basic realm="Member area"');
	header('HTTP/1.0 401 Unauthorized');
	header('Content-Type: text/html');
	echo "<html><body>That area is accessible for members only</body></html>\n";
} else {
	$file = file_get_contents('./img/42.png');
	$file = base64_encode($file);
	header('Content-Type: text/html');
	echo "<html><body>\n Hello Zaz<br />\n";
	echo "<img src='data:image/png;base64,$file'/>";
	echo "</body></html>";
}
?>