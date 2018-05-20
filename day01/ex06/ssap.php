#!/usr/bin/php
<?PHP

$tab_fin = [];

function    ft_split($p1)
{
	$my_tab = explode(" ", $p1);
	$my_tab = array_filter($my_tab, 'strlen');
	sort($my_tab);
	return $my_tab;
}

foreach(array_slice($argv,1) as $elem)
{
	$tab = ft_split($elem);
	$tab_fin = array_merge($tab, $tab_fin);
}
sort($tab_fin);
foreach($tab_fin as $elem)
	echo "$elem\n";
?>
