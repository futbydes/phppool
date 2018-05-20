#!/usr/bin/php
<?PHP

function    ft_split($p1)
{
	$my_tab = explode(" ", $p1);
	$my_tab = array_filter($my_tab, 'trim');
	return $my_tab;
}

$arr = trim($argv[1]);
$arr = ft_split($arr);
foreach(array_slice($arr,1) as $elem)
	echo "$elem ";
if (!empty($arr))
	echo $arr[0]."\n";

?>
