#!/usr/bin/php
<?PHP

$tab_fin = [];

function    ft_split($p1)
{
	$my_tab = explode(" ", $p1);
	$my_tab = array_filter($my_tab, 'strlen');
	return $my_tab;
}

function	typesort($a, $b)
{
	if (typenum($a) == typenum($b))
		return $a > $b ? 1 : -1;
	else if (typenum($a) < typenum($b))
		return -1;
	else if (typenum($a) > typenum($b))
		return 1;
	return $a[$i] > $b[$i] ? 1 : -1;
}

function	typenum($a)
{
	if (is_numeric($a))
		return (2);
	else if (preg_match("/^[a-z]$/i", $a))
		return (1);
	else if ($a == NULL)
		return (0);
	else
		return (3);
}

foreach(array_slice($argv,1) as $elem)
{
	$tab = ft_split($elem);
	$tab_fin = array_merge($tab, $tab_fin);
}

$i = 0;

function comp($a, $b)
{
	$a = strtolower($a);
	$b = strtolower($b);
	while ($a[$i] == $b[$i])
	{
		$i++;
		if (($a[$i] == NULL) && ($b[$i] == NULL)) {
			return 0;
		}
	}
	return typesort($a[$i], $b[$i]);
}

usort($tab_fin, "comp");
foreach($tab_fin as $elem)
	echo "$elem\n";
?>
