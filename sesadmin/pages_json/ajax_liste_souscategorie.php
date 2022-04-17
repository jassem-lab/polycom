<?php
session_start(); 
include('../connexion/cn.php'); 

$categorie="0";
if(isset($_POST['categorie'])){	
	$categorie=$_POST['categorie'];
}

 
?>
		<b>Liste des sous catégories</b>
		<select class="form-control select4" name="souscategorie" id="souscategorie">
			<option value="">Sélectionner un sous catégories</option>
			<?php 
				$req="SELECT * FROM souscategories WHERE categorie=".$categorie;
				$query=mysql_query($req);
				while($enreg=mysql_fetch_array($query)){
			?>
					<option value="<?php echo $enreg['id']; ?>"><?php echo $enreg['souscategorie']; ?></option>
	    	<?php } ?>
		</select>
