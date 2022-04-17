<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id = $_GET['ID'];
	
	$sql = "UPDATE vendeurs set etat=1  where id=".$id;
	$requete = mysql_query($sql) ;			
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../vendeur.php"</SCRIPT>';
  
?>