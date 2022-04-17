<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');
?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="dashbord.php"><i class="bx bx-home-alt"  style="color:#0d7cbc"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Paramétrage de base</li>
							</ol>
						</nav>
					</div>
				</div>
				
				
<?php
	if(isset($_POST['enregistrer_mail'])){	
		

		$mail		=	addslashes($_POST["mail"]) ;	
		$url		=	addslashes($_POST["url"]) ;	
		$signature	=	addslashes($_POST["signature"]) ;
		$nom		=	addslashes($_POST["nom"]) ;
		$tel1		=	addslashes($_POST["tel1"]) ;
		$tel2		=	addslashes($_POST["tel2"]) ;
		$tel3		=	addslashes($_POST["tel3"]) ;
		$mail1		=	addslashes($_POST["mail1"]) ;
		$mail2		=	addslashes($_POST["mail2"]) ;
		$mail3		=	addslashes($_POST["mail3"]) ;
		$adresse1	=	addslashes($_POST["adresse1"]) ;
		$adresse2	=	addslashes($_POST["adresse2"]) ;
		$adresse3	=	addslashes($_POST["adresse3"]) ;
		
		$facebook				=	addslashes($_POST["facebook"]) ;
		$instagram				=	addslashes($_POST["instagram"]) ;
		$frais_livraison		=	addslashes($_POST["frais_livraison"]) ;
		$description_livraison	=	addslashes($_POST["description_livraison"]) ;
		$panier_stock			=	addslashes($_POST["panier_stock"]) ;
		
		if ($_POST["group2"] == '1')
		{
			$minimiser_stock				=	'1';	
		}else{
			$minimiser_stock				=	'0';	
		}			
		

		$type1=pathinfo(basename($_FILES["logo"]["name"]), PATHINFO_EXTENSION);
		$file1=md5($_FILES["logo"]["name"].time()).".".$type1;
		if($type1=="jpg" or $type1=="JPG" or $type1=="jpeg" or $type1=="JPEG" or $type1=="png" or $type1=="PNG" or $type1=="bmp" or $type1=="BMP" or $type1=="gif" or $type1=="GIF"){
			
			$path = "assets/images/".$file1; 
			$pathcomplete = "assets/images/".$file1;
			move_uploaded_file($_FILES['logo']['tmp_name'], $pathcomplete);

			$sql="UPDATE `parametre` SET `mail`='".$mail."',`url`='".$url."',`signature`='".$signature."'
			,`nom`='".$nom."',`logo`='".$pathcomplete."',`tel1`='".$tel1."',`tel2`='".$tel2."',`tel3`='".$tel3."',`mail1`='".$mail1."',`mail2`='".$mail2."',`mail3`='".$mail3."',
			`adresse1`='".$adresse1."',`adresse2`='".$adresse2."',`adresse3`='".$adresse3."',`facebook`='".$facebook."',`instagram`='".$instagram."' 
			,`frais_livraison`='".$frais_livraison."',`description_livraison`='".$description_livraison."',`panier_stock`='".$panier_stock."',`minimiser_stock`='".$minimiser_stock."' where id=1";
		} else{
			$sql="UPDATE `parametre` SET `mail`='".$mail."',`url`='".$url."',`signature`='".$signature."'
			,`nom`='".$nom."',`tel1`='".$tel1."',`tel2`='".$tel2."',`tel3`='".$tel3."',`mail1`='".$mail1."',`mail2`='".$mail2."',`mail3`='".$mail3."',
			`adresse1`='".$adresse1."',`adresse2`='".$adresse2."',`adresse3`='".$adresse3."',`facebook`='".$facebook."',`instagram`='".$instagram."' 
			,`frais_livraison`='".$frais_livraison."',`description_livraison`='".$description_livraison."',`panier_stock`='".$panier_stock."',`minimiser_stock`='".$minimiser_stock."' where id=1";			
		}
			$req=mysql_query($sql);
		
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="?suc=succes" </SCRIPT>';

	}

	$mail		=	"" ;	
	$url		=   "" ;
	$Signature  = 	"";
	$nom		= 	"";
	$logo       = 	"";
	$tel1		= 	"";
	$tel2		= 	"";
	$tel3		= 	"";
	$mail1		= 	"";
	$mail2		= 	"";
	$mail3		= 	"";
	$adresse1	= 	"";
	$adresse2	= 	"";
	$adresse3	= 	"";
	$facebook	= 	"";
	$instagram	= 	"";
	$frais_livraison		= 	"";
	$description_livraison	= 	"";
	$minimiser_stock	= 	"";
	$panier_stock		= 	"";
	$req="select * from parametre where id=1";
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query))
	{
		$mail		=	$enreg["mail"] ;
		$url		=	$enreg["url"] ;	
		$signature	=	$enreg["signature"] ;

		$nom		=	$enreg["nom"] ;
		$logo		=	$enreg["logo"] ;
		$tel1		=	$enreg["tel1"] ;
		$tel2		=	$enreg["tel2"] ;	
		$tel3		=	$enreg["tel3"] ;
		$mail1		=	$enreg["mail1"] ;
		$mail2		=	$enreg["mail2"] ;
		$mail3		=	$enreg["mail3"] ;
		$adresse1	=	$enreg["adresse1"] ;
		$adresse2	=	$enreg["adresse2"] ;
		$adresse3	=	$enreg["adresse3"] ;
		$facebook	=	$enreg["facebook"] ;
		$instagram	=	$enreg["instagram"] ;
		$frais_livraison		=	$enreg["frais_livraison"] ;
		$description_livraison	=	$enreg["description_livraison"] ;
		$panier_stock		=	$enreg["panier_stock"] ;
		$minimiser_stock	=	$enreg["minimiser_stock"] ;
	}

?>				

				<div class="row">
				<form action="" method="POST" enctype="multipart/form-data"> 
					<div class="col-md-12 row">
						<?php if(isset($_GET['suc'])){ ?>
							<?php if($_GET['suc']=='succes'){ ?>
							<font color="green" ><center>La modification a été effectué avec succès !</center></font><br /><br />
							<?php } ?>									
						<?php } ?>						
						<hr>
						<div class="col-md-3">
							<b>Adresse mail d'envoi</b><br>
							<input type="email" class="form-control" name="mail" id="mail" value="<?php echo $mail;?>">
						</div>
						
						<div class="col-md-3">
							<b>URL de plateforme</b><br>
							<input type="text" class="form-control" name="url" id="url"  value="<?php echo $url;?>">
						</div>						

						<div class="col-md-4">
							<b>Signature</b><br>
							<textarea class="form-control" name="signature" id="signature" style="height: 100px;">  <?php echo $signature;?></textarea>
						</div>						
					</div>
				

				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="dashbord.php"><i class="bx bx-home-alt"  style="color:#0d7cbc"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Coordonnées de l'entreprise</li>
							</ol>
						</nav>
					</div>
				</div>				
				<div class="row">
				<form action="" method="POST"> 
					<div class="col-md-12 row">
						<div class="col-md-3">
							<b>Nom de l'entreprise</b><br>
							<input type="text" class="form-control" name="nom" id="nom" value="<?php echo $nom;?>">
						</div>
						
						<div class="col-md-3">
							<b>Logo</b><br>
							<input type="file" class="form-control" name="logo" id="logo">
							<?php if(file_exists($logo)) { ?>
								<img src="<?php echo $logo; ?>" style="width:50px">
							<?php } ?>
						</div>						
					
						<div class="col-md-2">
							<b>Téléphone 1</b><br>
							<input type="text" class="form-control" name="tel1" id="tel1" value="<?php echo $tel1;?>">
						</div>	
						<div class="col-md-2">
							<b>Téléphone 2</b><br>
							<input type="text" class="form-control" name="tel2" id="tel2" value="<?php echo $tel2;?>">
						</div>
						<div class="col-md-2">
							<b>Téléphone 3</b><br>
							<input type="text" class="form-control" name="tel3" id="tel3" value="<?php echo $tel3;?>">
						</div>						
					</div>
					<div class="col-md-12 row">
						<div class="col-md-3">
							<b>Mail 1</b><br>
							<input type="text" class="form-control" name="mail1" id="mail1" value="<?php echo $mail1;?>">
						</div>	
						<div class="col-md-3">
							<b>Mail 2</b><br>
							<input type="text" class="form-control" name="mail2" id="mail2" value="<?php echo $mail2;?>">
						</div>
						<div class="col-md-3">
							<b>Mail 3</b><br>
							<input type="text" class="form-control" name="mail3" id="mail3" value="<?php echo $mail3;?>">
						</div>						
					</div>		
					<div class="col-md-12 row">
						<div class="col-md-4">
							<b>Adresse 1</b><br>
							<textarea class="form-control" name="adresse1" id="adresse1" ><?php echo $adresse1; ?></textarea>
						</div>	
						<div class="col-md-4">
							<b>Adresse 2</b><br>
							<textarea class="form-control" name="adresse2" id="adresse2" ><?php echo $adresse2; ?></textarea>
						</div>	
						<div class="col-md-4">
							<b>Adresse 3</b><br>
							<textarea class="form-control" name="adresse3" id="adresse3" ><?php echo $adresse3; ?></textarea>
						</div>						
					</div>
					<div class="col-md-12 row">	
						<div class="col-md-3">
							<b>Page facebook</b><br>
							<input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo $facebook;?>">
						</div>		
						<div class="col-md-3">
							<b>Page instagram</b><br>
							<input type="text" class="form-control" name="instagram" id="instagram" value="<?php echo $instagram;?>">
						</div>							
					</div>
					<div class="col-md-12 row" style="display:none">	
						<div class="col-md-2">
							<b>Frais de livraison</b><br>
							<input type="number" class="form-control" name="frais_livraison" id="frais_livraison" value="<?php echo $frais_livraison;?>">
						</div>					
						<div class="col-md-10">
							<b>Description de livraison</b><br>
							<textarea class="form-control" name="description_livraison" id="description_livraison" ><?php echo $description_livraison; ?></textarea>
						</div>					
					</div>
					
					<div class="col-md-12 row" style="margin-top:20px;display:none">	
						<div class="col-md-6">
								<input type="checkbox" name="panier_stock" id="panier_stock" value="1"  <?php if($panier_stock==1){ ?> checked <?php }?>>
								<label for="panier_stock">Autoriser l'ajout de produit au panier malgre que son stock est insuffisant</label><br>	
						</div>
					<div class="col-md-6" style="display:none">
					
						<b>Diminuer le stock de produit  </b>
						<br>
						<input name="group2" type="radio" id="radio_4" class="radio-col-grey" value="1"  <?php if($minimiser_stock==1){ ?> checked <?php }?></>
						<label for="radio_4">Après la validation de commande par l'administateur</label>
						<input name="group2" type="radio" id="radio_5" value="0" class="radio-col-blue" <?php if($minimiser_stock==0){ ?> checked <?php }?>/>
						<label for="radio_5">Après la validation de commande par le client</label>
											
					</div>							
					</div>
					
					
					
					<div class="col-md-12 row">	
						<div class="col-md-2"><br>
								<button type="submit" onclick="CreateTodo();" class="btn btn-primary"  style="background-color:#0d7cbc;border-color: #8833ff;">Enregistrer</button>
								<input class="form-control" type="hidden" name="enregistrer_mail">
						</div>						
					</div>
				</form>	
				</div>

			
			</div>
		</div>
		
	


<?php
	include('menu_footer/footer_ad.php');
?>