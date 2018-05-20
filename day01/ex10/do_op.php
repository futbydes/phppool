#!/usr/bin/php
<?php
$arg1 = trim($argv[1]);
$arg2 = trim($argv[2]);
$arg3 = trim($argv[3]);
$fin = 0;

if ($argc != 4) {
	echo "Incorrect Parameters\n";
	return ;
}

if ($arg2 == '+')
	echo ($arg1 + $arg3)."\n";
else if ($arg2 == '-')
	echo ($arg1 - $arg3)."\n";
else if ($arg2 == '*')
	echo ($arg1 * $arg3)."\n";
else if ($arg2 == '/')
	echo ($arg1 / $arg3)."\n";
else if ($arg2 == '%')
	echo ($arg1 % $arg3)."\n";
?>
