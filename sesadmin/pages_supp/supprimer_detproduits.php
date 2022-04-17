<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id 		= $_GET['ID'];
	
	$sql = "delete from images_produits where id=".$id;
	$requete = mysql_query($sql) ;			
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../produits.php"</SCRIPT>';
  
?>