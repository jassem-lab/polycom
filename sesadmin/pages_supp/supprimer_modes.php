<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id = $_GET['ID'];
	
	$sql = "delete from mode_paiement where id=".$id;
	$requete = mysql_query($sql) ;			
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../modes.php"</SCRIPT>';
  
?>