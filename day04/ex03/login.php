<?php
include('auth.php');
session_start();
$_SESSION['loggued_on_user'] = "";
if ($_GET['login'] != NULL && $_GET['login'] != "" && 
	$_GET['passwd'] != NULL && $_GET['passwd'] != "") {
	if (auth($_GET['login'], $_GET['passwd']) == FALSE) {
		echo "ERROR\n";
		return ;
	}
	else {
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
		$_SESSION['loggued_on_user'] = $_SESSION['login'];
		echo "OK\n";
	}
}
else
	echo "ERROR\n";
?>