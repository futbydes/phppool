#!/usr/bin/php
<?PHP

function	ft_split($p1)
{
	$my_tab = explode(" ", $p1);
	$my_tab = array_filter($my_tab, 'strlen');
	sort($my_tab);
	return $my_tab;
}

?>
