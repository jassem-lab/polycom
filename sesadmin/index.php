<?php
session_start();
include('connexion/cn.php');
	
if  (!isset($_SESSION['SES_ADMIN'])) 
{
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="login.php" </SCRIPT>';
	exit;
}
else{
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="paremtrage.php" </SCRIPT>';
	exit;
}

?>