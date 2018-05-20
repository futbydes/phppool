#!/usr/bin/php
<?php

	function pr_change($file)
	{
		return ($file[1].strtoupper($file[2]).$file[3]);
	}

	function pr_line_in($file)
	{
		$file[0] = preg_replace_callback('/( title=\")(.*?)(\">)/mi', 'pr_change', $file[0]);
		$file[0] = preg_replace_callback('/(>)(.*?)(<)/si', 'pr_change', $file[0]);
		return ($file[0]);
	}

	if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$content = file($argv[1]);
	$it = 0;
	while ($content[$it])
	{
		$cont .= $content[$it];
		$it++;
	}
	$content = $cont;
	$content = preg_replace_callback('/(<a )(.*?)(>)(.*)(<\/a)/si', 'pr_line_in', $content);
	echo ($content);
?>