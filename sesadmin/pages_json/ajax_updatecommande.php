<?php

	session_start(); 
	include('../connexion/cn.php'); 

    $tableau_produit   		= $_GET['tableau_produit']; 
	$tableau_qte	   		= $_GET['tableau_qte']; 
	$tableau_total 			= $_GET['tableau_total'];
	$idcommande   	 		= $_GET['idcommande'];
	
	$nb_occ					= mb_substr_count($tableau_produit,',');
	$nb_occ1				= mb_substr_count($tableau_qte,',');
	$nb_occ2				= mb_substr_count($tableau_total,',');
	$tableau_prod			= array();
	$tableau_qtee			= array();
	$tableau_tot			= array();

	
	//intilisation de tableau vide
	for($l=0; $l<$nb_occ+1; $l++){
		$tableau_prod[$l]	="";
	}
	for($l=0; $l<$nb_occ1+1; $l++){
		$tableau_qtee[$l]	="";
	}	
	for($l=0; $l<$nb_occ2+1; $l++){
		$tableau_tot[$l]	="";
	}	

	//fin intilisation de tableau vide
	$l=0;$j=0;
	for($k=0; $k<strlen($tableau_produit); $k++){
			if($tableau_produit[$k]<>","){
				$tableau_prod[$l]=$tableau_prod[$l].$tableau_produit[$k];	
				$j=$j+1;
			}else{
				$l=$l+1;
			}
	}

	
	$l=0;$j=0;
	for($k=0; $k<strlen($tableau_qte); $k++){
			if($tableau_qte[$k]<>","){
				$tableau_qtee[$l]=$tableau_qtee[$l].$tableau_qte[$k];	
				$j=$j+1;
			}else{
				$l=$l+1;
			}
	}
	
	$l=0;$j=0;
	for($k=0; $k<strlen($tableau_total); $k++){
			if($tableau_total[$k]<>","){
				$tableau_tot[$l]=$tableau_tot[$l].$tableau_total[$k];	
				$j=$j+1;
			}else{
				$l=$l+1;
			}
	}

	

	for($i=0;$i<$nb_occ+1;$i++){
		if($tableau_produit[$i]<>0){	
		echo	$req="UPDATE detail_commande SET quantite=".$tableau_qtee[$i].", prix_total=".$tableau_tot[$i]." where id=".$tableau_produit[$i];
			$query=mysql_query($req);
		}		
	}	
	
	sleep(2);
	
	$total = 0;
	$req="select sum(prix_total) as total from detail_commande where idcommande=".$idcommande;
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		$total = $enreg['total'];
	}
	
	$sql="update commandes set total=".$total." where id=".$idcommande;
	$query=mysql_query($sql);


	$json = '{"idcommande":"'.$idcommande.'"}';
	json_encode($json);
	echo $json;
	
	
?>