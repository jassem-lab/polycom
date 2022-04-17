<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id = $_GET['ID'];
	
	$sql = "UPDATE commandes set etat=2  where id=".$id;
	$requete = mysql_query($sql) ;			
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../dashbordcli.php"</SCRIPT>';
  
?>