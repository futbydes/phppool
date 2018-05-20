#!/usr/bin/php
<?php
$s = trim($argv[1]);
$count = 1;
while ($count)
	$s = str_replace('  ',' ', $s, $count);
if ($argv[1][0] != NULL) echo $s."\n";
?>
