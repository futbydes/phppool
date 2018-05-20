#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Kiev');
	if ($argc > 1)
		return ;
	$arr = array();
	$file = file_get_contents("/var/run/utmpx");
	$subs = substr($file, 1256);
	$usr = get_current_user();
	$btype = 'a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad';
	while ($subs != NULL) {
		$array = unpack($btype, $subs);
		if ($array[type] == 7)
		{
			$date = date("M  j H:i", $array["time1"]););
			$tab = array($usrr."   ".$line."  ".$date);
			$arr = array_merge($arr, $tab);
		}
		$subs = substr($subs, 628);		
	}
	sort($arr);
	foreach ($arr as $a) {
		echo $a."\n";
	}
?>