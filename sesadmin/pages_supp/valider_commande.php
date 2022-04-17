<?php
	session_start();
	include('../connexion/cn.php');	
	
	$id = $_GET['ID'];
	
	$sql = "UPDATE commandes set etat=1  where id=".$id;
	$requete = mysql_query($sql) ;	

	$minimiser_stock		= "0";
	$reqa="select * from parametre where id=1";
	$querya=mysql_query($reqa);
	while($enrega=mysql_fetch_array($querya)){
		$minimiser_stock		= $enrega['minimiser_stock'] ;			
	}
		
	$req="select * from detail_commande where idcommande=".$id;
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		
		 $stock_article = 0;
		 $reqarticle="select * from produits where id=".$enreg["produit"];
		 $queryarticle=mysql_query($reqarticle);
		 while($enregarticle=mysql_fetch_array($queryarticle)){
			 $stock_article = $enregarticle['stock'];
		 }
		 
			 if($minimiser_stock==1){
				 $stock_article = $stock_article - $enreg["quantite"];
				 $sql="UPDATE produits set stock=".$stock_article." where id=".$enreg["produit"];
				 $query1=mysql_query($sql);
			 }		
		
	}
	
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="../gest_commande.php"</SCRIPT>';
  
?>