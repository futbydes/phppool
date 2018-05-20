#!/usr/bin/php
<?php
function	ft_is_sort($array)
{
	$sorted = $array;
	$rsorted = $array;
	sort($sorted);
	rsort($rsorted);
	if ($array === $sorted || $array === $rsorted)
		return TRUE;
	else
		return FALSE;
}
?>
