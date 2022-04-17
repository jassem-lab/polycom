<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id = $_GET['ID'];
	
	$sql = "delete from partenaires where id=".$id;
	$requete = mysql_query($sql) ;			
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../partenaires.php"</SCRIPT>';
  
?>