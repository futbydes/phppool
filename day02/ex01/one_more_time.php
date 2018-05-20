#!/usr/bin/php
<?php

date_default_timezone_set( 'Europe/Paris' );

$month = array(1 => "janvier",
	2 => "février",
	3 => "mars",
	4 => "avril",
	5 => "mai",
	6 => "juin",
	7 => "juillet",
	8 => "août",
	9 => "septembre",
	10 => "octobre",
	11 => "novembre",
	12 => "décembre");

$day = array(1 => "lundi",
	2 => "mardi",
	3 => "mercredi",
	4 => "jeudi",
	5 => "vendredi",
	6 => "samedi",
	7 => "dimanche");

$array = $argv[1];
$array = explode(' ', $array);
$array[0] = lcfirst($array[0]);
$array[2] = lcfirst($array[2]);
if ((preg_match('/^([1-9]|0[1-9]|[1-2][0-9]|3[0-1])$/', $array[1]) === 0) ||
	(preg_match('/^([1-2][0-9][0-9][0-9])$/', $array[3]) === 0) ||
	(preg_match('/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/', $array[4]) === 0) ||
	(count($array) != 5) || (in_array($array[0], $day) == FALSE) ||
	(in_array($array[2], $month) == FALSE)) {
	echo "Wrong format\n";
	return ;
}
$time = explode(':',$array[4]);
$timestamp = mktime($time[0], $time[1], $time[2], array_search($array[2], $month), $array[1], $array[3]);
if (date("N", $timestamp) != array_search($array[0], $day)) {
	echo "Wrong format\n";
	return ;
}
print($timestamp."\n");
?>