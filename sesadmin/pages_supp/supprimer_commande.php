<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id 		= $_GET['ID'];
	$idcommande = $_GET['idcommande'];
	
	$sql = "delete from commandes where id=".$id;
	$requete = mysql_query($sql) ;

	$sql = "delete from commandes detail_commande where idcommande=".$id;
	$requete = mysql_query($sql) ;		
	
	$sql = "delete from commandes detail_personnel where idcommande=".$id;
	$requete = mysql_query($sql) ;		
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../gest_commande.php"</SCRIPT>';
  
?>