#!/usr/bin/php
<?php
$array = trim($argv[1]);
$array = preg_replace('/[\t, ]+/', ' ', $array);
echo $array."\n";
?>
