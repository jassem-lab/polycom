<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');
?>
<script>
function Supprimer(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_souscategorie.php?ID="+id ;
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
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion des sous-services</li>
							</ol>
						</nav>
					</div>
				</div>
				
				
<?php
	if(isset($_GET['ID'])){
		$id = $_GET['ID'];
	}else{
		$id = 0;
	}
	if(isset($_POST['enregistrer_mail'])){	
		
		$categorie				=	addslashes($_POST["categorie"]) ;
		$souscategorie			=	addslashes($_POST["souscategorie"]) ;	
		$presentation			=	addslashes($_POST["mytextarea5"]) ;		
		
		if($id==0){	


			$type1=pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION);
			$file1=md5($_FILES["image"]["name"].time()).".".$type1;
			if($type1=="jpg" or $type1=="JPG" or $type1=="jpeg" or $type1=="JPEG" or $type1=="png" or $type1=="PNG" or $type1=="bmp" or $type1=="BMP" or $type1=="gif" or $type1=="GIF"){
				
				$path = "assets/images/categorie/".$file1; 
				$pathcomplete = "assets/images/categorie/".$file1;
				move_uploaded_file($_FILES['image']['tmp_name'], $pathcomplete);

			echo	$sql="INSERT INTO `souscategories`(`categorie`, `souscategorie`, `logo`, `presentation`) VALUES   ('".$categorie."','".$souscategorie."','".$pathcomplete."','".$presentation."')";
			} else{
				$sql="INSERT INTO `souscategories`(`categorie`, `souscategorie`) VALUES ('".$categorie."','".$souscategorie."')";
			}
				$req=mysql_query($sql);
			

		} else{

			$type1=pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION);
			$file1=md5($_FILES["image"]["name"].time()).".".$type1;
			if($type1=="jpg" or $type1=="JPG" or $type1=="jpeg" or $type1=="JPEG" or $type1=="png" or $type1=="PNG" or $type1=="bmp" or $type1=="BMP" or $type1=="gif" or $type1=="GIF"){
				
				$path = "assets/images/categorie/".$file1; 
				$pathcomplete = "assets/images/categorie/".$file1;
				move_uploaded_file($_FILES['image']['tmp_name'], $pathcomplete);

			echo	$sql="UPDATE `souscategories` SET `categorie`='".$categorie."', `souscategorie`='".$souscategorie."', `logo`='".$pathcomplete."', `presentation`='".$presentation."' where id=".$id;
			} else{
				$sql="UPDATE `souscategories` SET `categorie`='".$categorie."', `souscategorie`='".$souscategorie."', `presentation`='".$presentation."'  where id=".$id;
			}
				$req=mysql_query($sql);
			


		}

		//echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="?suc=succes" </SCRIPT>';
	}

	$categorie			=	"0" ;	
	$souscategorie		=	"" ;
	$image				=	"" ;
	$presentation		=	"" ;
	$req="select * from souscategories where id=".$id;
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query))
	{
		$categorie			=	$enreg["categorie"] ;	
		$souscategorie		=	$enreg["souscategorie"] ;	
		$image				=	$enreg["logo"] ;	
		$presentation		=	$enreg["presentation"] ;
	}

?>				

				<div class="row">
				<form action="" method="POST" enctype="multipart/form-data"> 
					<div class="col-md-12 row">
						<?php if(isset($_GET['suc'])){ ?>
							<?php if($_GET['suc']=='succes'){ ?>
								<font color="green" ><center>L'ajout de sous-service a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
							<?php if($_GET['suc']=='succes1'){ ?>	
								<font color="green" ><center>La modification a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
						<?php } ?>						
						<hr>
						<div class="col-md-3">
							<b>Nom de sous-service(*)</b><br>
							<input type="text" class="form-control" name="souscategorie" id="souscategorie" value="<?php echo $souscategorie;?>" required >
						</div>					
						<div class="col-md-2">
							<b>Service</b><br>
							<select class="single-select" data-placeholder="" name="categorie" required>
								<option value="">Sélectionner le service</option>
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
							<input type="file" class="form-control" name="image" id="image">
							<?php if(file_exists($image)) { ?>
								<img src="<?php echo $image; ?>" style="width:50px">
							<?php } ?>							
						</div>										
						<div class="col-md-5">
							<b>Présentation</b><br>
							<textarea id="mytextarea5" name="mytextarea5" class="form-control"><?php echo $presentation; ?></textarea>
						</div>						
						<div class="col-md-2"><br>
								<button type="submit" onclick="CreateTodo();" class="btn btn-primary"   style="background-color:#0d7cbc;border-color: #8833ff;">Enregistrer</button>
								<input class="form-control" type="hidden" name="enregistrer_mail">
						</div>						
					</div>
				</form>	
<?php
$reqSCateogirie="";
$nomcategorie="";
if(isset($_POST['nomcategorie'])){
	if(($_POST['nomcategorie'])){
		$nomcategorie	=	$_POST['nomcategorie'];
		$reqSCateogirie	=	" and  souscategorie like '%".$nomcategorie."%'";
	}
}
$reqCateogirie="";
$idcategorie="";
if(isset($_POST['idcategorie'])){
	if(($_POST['idcategorie'])){
		$idcategorie	=	$_POST['idcategorie'];
		$reqCateogirie	=	" and  categorie =".$idcategorie;
	}
}
?>				
					<form name="SubmitContact" class="" method="post" action="" onSubmit="" style=''>
						Filtrage par:
						<div class="col-xl-12">
							<div class="row">
								<div class="col-xl-3">
									<b>Nom de sous service</b>
									<input type="text" class="form-control" name="nomcategorie" value="<?php echo $nomcategorie; ?>">
								</div>	
								<div class="col-xl-3">
									<b>Service</b><br>
									<select class="single-select" data-placeholder="" name="idcategorie" >
										<option value="">Sélectionner un service</option>
										<?php
											$reqm="select * from categorie";
											$querym=mysql_query($reqm);
											while($enregm=mysql_fetch_array($querym)){
										?>
											<option value="<?php echo $enregm['id']; ?>" <?php if($enregm['id']==$idcategorie){ ?> selected <?php } ?>><?php echo $enregm['categorie']; ?></option>
										<?php } ?>
									</select>	
								</div>	
								<div class="col-xl-3">
								  <b></b><br>
									<input name="SubmitContact" type="submit" id="submit" class="btn btn-primary btn-sm " style="background-color:#0d7cbc;border-color: #8833ff;" value="Filtrer">											
								</div>																								
							</div>	
						</div>
					</form>	
					<hr>				
					<hr><b>Liste de sous-service</b>
					<div class="col-md-12 row">
					<div class="table-responsive mt-3">
					   <table class="table align-middle mb-0" style="border: solid 1px;">
						   <thead class="table-light">
							   <tr style="color:#525f7f">
								   <th>Nom de service</th>
								   <th>Service</th>
								   <th>Actions</th>
							   </tr>
						   </thead>
						   <tbody>						
<?php
	$req1="select * from souscategories where 1=1 ".$reqCateogirie.$reqSCateogirie." order by id";
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
		$souscategorie		=	$enreg1["souscategorie"] ;	

		$categorie			=	"";
		$reqc="select * from categorie where id=".$enreg1['categorie'];
		$queryc=mysql_query($reqc);
		while($enregc=mysql_fetch_array($queryc)){
			$categorie			=	$enregc['categorie'];
		}	
		
		$num=0;
		$reqc="select * from produits where souscategorie=".$id;
		$queryc=mysql_query($reqc);
		$num=mysql_num_rows($queryc);
			
?>			
								<tr style="border: solid 1px;">
									 <td><?php echo $souscategorie;?></td>
									 <td><?php echo $categorie;?></td>
									 <td>
										<a href="souscategories.php?ID=<?php echo $id; ?>"><i class="bx bxs-edit" style="color:#0d7cbc"></i></a>
										<?php if($num==0){ ?>
										<a href="Javascript:Supprimer('<?php echo $id; ?>')"><i class="bx bxs-trash"  style="color:red"></i></a>
										<?php } ?>
									 </td>
								</tr>
<?php
}
?>
							</tbody>
						</table>	
					</div>	
				</div>
				</div>
		</div>
	</div>
<?php
	include('menu_footer/footer_ad.php');
?>
