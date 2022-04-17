<!doctype html>
<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');

?>
<script>
function Supprimer(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_produits.php?ID="+id ;
			}			    
	  }			  
</script>	
		<div class="page-wrapper">
			<div class="page-content">
				
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"   style="color:#0d7cbc;border-color: #8833ff;"><a href="dashbord.php"><i class="bx bx-home-alt" style="color:#0d7cbc"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion des produits</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="produits.php" class="btn btn-primary" style="background-color:#0d7cbc;border-color: #8833ff;">Retour</a>
						</div>
					</div>					
				</div>
<?php
	if(isset($_GET['ID'])){
		$id = $_GET['ID'];
	}else{
		$id = 0;
	}
	
	if(isset($_POST['enregistrer_mail'])){	
		
		$ordre		=	addslashes($_POST["ordre"]) ;	
		$produit	=	addslashes($_POST["produit"]) ;	
		$categorie	=	addslashes($_POST["categorie"]) ;	
		$prix		=	addslashes($_POST["prix"]) ;
		$stock		=	addslashes($_POST["stock"]) ;	
		$remise		=	addslashes($_POST["remise"]) ;	
		$new		=	addslashes($_POST["new"]) ;	
		$detail		=	addslashes($_POST["mytextarea"]) ;	
		if(isset($_POST["souscategorie"])){
			$souscategorie					=	0 ;
		} else{
			$souscategorie					=	0 ;
		}
		if($id==0){	
		
			$idproduit = 0;
			$reqmax="select max(id) as idcategorie from produits";
			$querymax=mysql_query($reqmax);
			if(mysql_num_rows($querymax)>0){
				while($enregmax=mysql_fetch_array($querymax)){
					$idproduit = $enregmax['idcategorie'] + 1;
				}
			} else{
					$idproduit = 1;
			}		
			
			$id=$idproduit ;

			$type1=pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION);
			$file1=md5($_FILES["image"]["name"].time()).".".$type1;
			if($type1=="jpg" or $type1=="JPG" or $type1=="jpeg" or $type1=="JPEG" or $type1=="png" or $type1=="PNG" or $type1=="bmp" or $type1=="BMP" or $type1=="gif" or $type1=="GIF"){
				
				$path = "assets/images/products/".$file1; 
				$pathcomplete = "assets/images/products/".$file1;
				move_uploaded_file($_FILES['image']['tmp_name'], $pathcomplete);

				$sql="INSERT INTO `produits`(`id`,`ordre`, `produit`, `image`, `prix`, `detail`, `categorie`, `souscategorie`, `new`, `stock`, `remise`) VALUES 
				('".$idproduit."','".$ordre."','".$produit."','".$pathcomplete."','".$prix."','".$detail."','".$categorie."','".$souscategorie."','".$new."','".$stock."','".$remise."')";					
				
			} else{
				
					$sql="INSERT INTO `produits`(`id`, `ordre`, `produit`, `image`, `prix`, `detail`, `categorie`, `souscategorie`, `new`, `stock`, `remise`) VALUES 
					('".$idproduit."','".$ordre."','".$produit."','".$pathcomplete."','".$prix."','".$detail."','".$categorie."','".$souscategorie."','".$new."','".$stock."','".$remise."')";					
				

			}
			
			$req=mysql_query($sql);

				$total1 = count($_FILES['images']['name']);		
				for($i=0; $i<$total1; $i++) {
					
					$type1=pathinfo(basename($_FILES["images"]["name"][$i]), PATHINFO_EXTENSION);
					$path_parts =pathinfo(basename($_FILES["images"]["name"][$i]));
					$file1=$path_parts['filename'].".".$type1;	
					if($type1 != ''){
						
						$pathcomplete = "assets/images/products/".$file1;
						move_uploaded_file($_FILES['images']['tmp_name'][$i], $pathcomplete);	

						$sql="INSERT INTO `images_produits`(`produit`,`image`) VALUES
						('".$idproduit."','".$pathcomplete."' )";
						$req=mysql_query($sql);							

					}
				}
								
				
		} else{

			
			$type1=pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION);
			$file1=md5($_FILES["image"]["name"].time()).".".$type1;
			if($type1=="jpg" or $type1=="JPG" or $type1=="jpeg" or $type1=="JPEG" or $type1=="png" or $type1=="PNG" or $type1=="bmp" or $type1=="BMP" or $type1=="gif" or $type1=="GIF"){
				
				$path = "assets/images/products/".$file1; 
				$pathcomplete = "assets/images/products/".$file1;
				move_uploaded_file($_FILES['image']['tmp_name'], $pathcomplete);
				
				$sql="UPDATE `produits` SET `produit`='".$produit."',`ordre`='".$ordre."', `image`='".$pathcomplete."', `prix`='".$prix."', `detail`='".$detail."', `categorie`='".$categorie."', `souscategorie`='".$souscategorie."', `remise`='".$remise."', `new`='".$new."', `stock`='".$stock."' where id=".$id;			
								

			} else{
				$sql="UPDATE `produits` SET `produit`='".$produit."',`ordre`='".$ordre."', `prix`='".$prix."', `detail`='".$detail."', `categorie`='".$categorie."', `souscategorie`='".$souscategorie."', `remise`='".$remise."', `new`='".$new."', `stock`='".$stock."'  where id=".$id;		
			
			}
				$req=mysql_query($sql);		

		
							
			
				$total1 = count($_FILES['images']['name']);		
				for($i=0; $i<$total1; $i++) {
					
					$type1=pathinfo(basename($_FILES["images"]["name"][$i]), PATHINFO_EXTENSION);
					$path_parts =pathinfo(basename($_FILES["images"]["name"][$i]));
					$file1=$path_parts['filename'].".".$type1;	
					if($type1 != ''){
						
						$pathcomplete = "assets/images/products/".$file1;
						move_uploaded_file($_FILES['images']['tmp_name'][$i], $pathcomplete);	

						$sql="INSERT INTO `images_produits`(`produit`,`image`) VALUES
						('".$id."','".$pathcomplete."' )";
						$req=mysql_query($sql);							

					}
				}			
		}
		
		
			$type2=pathinfo(basename($_FILES["fiche1"]["name"]), PATHINFO_EXTENSION);
			$file2=md5($_FILES["fiche1"]["name"].time()).".".$type2;			
			if($type2){
				$pathcomplete2 = "assets/images/products/".$file2;
				move_uploaded_file($_FILES['fiche1']['tmp_name'], $pathcomplete2);

				$sql="UPDATE `produits` SET `fiche`='".$pathcomplete2."'where id=".$id;
				$req=mysql_query($sql);		
			} 		
			
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="produits.php" </SCRIPT>';		
		
	}

?>				
				
<?php

	$produit			=	"" ;	
	$categorie			=	"" ;
	$image				=	"" ;
	$prix				=	"0" ;
	$detail				=	"" ;
	$fiche				=	"" ;
	$souscategorie		=	0;
	$stock				=	"0" ;
	$remise				=	"0" ;
	$new				=	"0" ;
	$ordre				=	0;

	$req1="select * from produits where id=".$id;
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
		$produit			=	$enreg1["produit"] ;
		$categorie			=	$enreg1["categorie"] ;
		$souscategorie		=	$enreg1["souscategorie"] ;
		$image				=	$enreg1["image"] ;	
		$prix				=	$enreg1["prix"] ;
		$detail				=	$enreg1["detail"] ;
		$fiche				=	$enreg1["fiche"] ;
		$stock				=	$enreg1["stock"] ;
		$remise				=	$enreg1["remise"] ;
		$new				=	$enreg1["new"] ;
	}	
?>	
				<div class="row">
				<form action="" method="POST"  enctype="multipart/form-data"> 
					<div class="col-md-12 row">
						<?php if(isset($_GET['suc'])){ ?>
							<?php if($_GET['suc']=='succes'){ ?>
								<font color="green" ><center>L'ajout de produit a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
							<?php if($_GET['suc']=='succes1'){ ?>	
								<font color="green" ><center>La modification a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
						<?php } ?>						
						<hr>
						<div class="col-md-2">
							<b>Ordre </b><br>
							<input type="text" class="form-control" name="ordre" id="ordre" value="<?php echo $ordre;?>"  >
						</div>		
						<div class="col-md-3">
							<b>Nom de produit(*)</b><br>
							<input type="text" class="form-control" name="produit" id="produit" value="<?php echo $produit;?>" required >
						</div>		
						<div class="col-md-3">
							<b>Catégorie</b><br>
							<select class="single-select" data-placeholder="" name="categorie" id="categorie" required>
								<option value="">Sélectionner la catégorie</option>
								<?php
									$reqm="select * from categorie";
									$querym=mysql_query($reqm);
									while($enregm=mysql_fetch_array($querym)){
								?>
									<option value="<?php echo $enregm['id']; ?>" <?php if($enregm['id']==$categorie){ ?> selected <?php } ?>><?php echo $enregm['categorie']; ?></option>
								<?php } ?>
							</select>							
						</div>
												
							
						<div class="col-md-2">
							<b>Image </b><br>
							<input type="file" class="form-control" name="image" id="image"	<?php if($image=="") { ?> required <?php } ?>		>   
							<?php if(file_exists($image)) { ?>
								<img src="<?php echo $image; ?>" style="width:50px">
							<?php } ?>							
						</div>	
						<div class="col-md-2">
							<b>Autre images </b><br>
							<input type="file" class="form-control" name="images[]" id="images[]" multiple="multiple">					
						</div>							
						<div class="col-md-2">
							<b>Prix </b><br>
							<input type="number" class="form-control" name="prix" id="prix" value="<?php echo $prix; ?>" required>						
						</div>	
					</div>
					
					<div class="col-md-12 row" style="margin-top:15px">
						<div class="col-md-2">
							<b>Stock </b><br>
							<input type="number" class="form-control" name="stock" id="stock" value="<?php echo $stock; ?>" required>						
						</div>	
						<div class="col-md-2">
							<b>Remise </b><br>
							<input type="number" class="form-control" name="remise" id="remise" value="<?php echo $remise; ?>" required>						
						</div>	
						<div class="col-md-3"><br>
							<input type="checkbox" name="new" id="new" value="1"  <?php if($new==1){ ?> checked <?php }?>>
							<label for="new">New</label><br>						
						</div>							
					</div>
					<div class="col-md-12 row" style="margin-top:15px">
						<div class="col-md-6">
							<b>Détail</b><br>
							<textarea id="mytextarea" name="mytextarea"><?php echo $detail; ?></textarea>
						</div>	
						<div class="col-md-6">
							<b>Catalogue</b><br>
							<input type="file" name="fiche1" id="fiche1" class="form-control">
						</div>							
					</div>	

									
					<div class="col-md-12 row" style="margin-top:15px">
						<div class="col-md-2"><br>
							<button type="submit" onclick="CreateTodo();" class="btn btn-primary"  style="background-color:#0d7cbc;border-color: #8833ff;">Enregistrer</button>
							<input class="form-control" type="hidden" name="enregistrer_mail">
						</div>			
					</div>	

					
					</div>
				</form>	
				</div>

				
			</div>
		</div>
<?php
	include('menu_footer/footer_ad.php');
?>
<script>
		
</script>