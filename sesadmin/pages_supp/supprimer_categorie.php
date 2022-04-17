<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id = $_GET['ID'];
	
	$sql = "delete from categorie where id=".$id;
	$requete = mysql_query($sql) ;	

	$sql = "delete from marques_par_categorie where idcategorie=".$id;
	$requete = mysql_query($sql) ;	
	
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../categories.php"</SCRIPT>';
  
?>