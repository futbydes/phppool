#!/usr/bin/php
<?PHP

$f = fopen("php://stdin", "r");

do
{
	echo "Enter a number: ";
	$s = fgets($f, 255);
	$s = rtrim($s);
	if (feof($f))
	{
		echo "\n";
		exit();
	}
	if (is_numeric($s))
	{
		if ($s % 2 != 0) echo "The number $s is odd\n";
		if ($s % 2 == 0) echo "The number $s is even\n";
	}
	else
		echo "'$s' is not number\n";
}
while (1);
?>
