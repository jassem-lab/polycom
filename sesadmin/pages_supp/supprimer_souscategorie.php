<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id = $_GET['ID'];
	
	$sql = "delete from souscategories where id=".$id;
	$requete = mysql_query($sql) ;			
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../souscategories.php"</SCRIPT>';
  
?>