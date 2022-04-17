<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id 		= $_GET['ID'];
	$idcommande = $_GET['idcommande'];
	
	$sql = "delete from detail_commande where id=".$id;
	$requete = mysql_query($sql) ;			
	
	$total = 0;
	$req="select sum(prix_total) as total from detail_commande where idcommande=".$idcommande;
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		$total = $enreg['total'];
	}
	
	$sql="update commandes set total=".$total." where id=".$idcommande;
	$query=mysql_query($sql);
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../dashbordcli.php"</SCRIPT>';
  
?>