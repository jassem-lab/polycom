<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id = $_GET['ID'];
	
	$sql = "delete from produits where id=".$id;
	$requete = mysql_query($sql) ;			
	
	
	$sql = "delete from couleur_produit where id=".$id;
	$requete = mysql_query($sql) ;	

	$sql = "delete from images_produits where id=".$id;
	$requete = mysql_query($sql) ;	


	$sql = "delete from marque_produit where id=".$id;
	$requete = mysql_query($sql) ;		
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../produits.php"</SCRIPT>';
  
?>