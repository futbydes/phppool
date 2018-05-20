#!/usr/bin/php
<?php

if ($argc != 2)
	exit ;
$c_init= curl_init($argv[1]);
curl_setopt($c_init, CURLOPT_RETURNTRANSFER, 1);
$html = curl_exec($c_init);
curl_close($c_init);
$path = substr(strrchr($argv[1], "/"), 1 );

if (!preg_match_all('/<img.*?src ?= ?["\'"](?P<img_url>.*?)["\']/si', $html, $imgs))
	return ;

delete_dir($path);

if (!mkdir($path))
	return ;
foreach ($imgs['img_url'] as $imglink)
{
	$imglink = preg_replace('/^\/\//', "http://", $imglink);
	$imgname =  substr(strrchr($imglink, "/"),1);
	$c_init = curl_init($imglink);
	curl_setopt( $c_init, CURLOPT_RETURNTRANSFER, 1 );
	$img = curl_exec($c_init);
	$fp = fopen($path.'/'.$imgname,'w');
	fwrite($fp, $img);
}

function delete_dir($path)
{
	if (is_dir($path)) 
	{
		$files = array_diff(scandir($path), array( '.', '..'));
		foreach ($files as $file)
			delete_dir(realpath($path).'/'.$file);
		return rmdir ($path);	
	}
	else if (is_file($path))
		return unlink($path);
	return false;
}

?>