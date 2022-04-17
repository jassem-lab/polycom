<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');
?>
<script>
function Supprimer(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_modes.php?ID="+id ;
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
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion des modes de paiement</li>
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
		
		$mode				=	addslashes($_POST["mode"]) ;	
		$presentation		=	addslashes($_POST["presentation"]) ;
		
		if($id==0){	
			$type1=pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION);
			$file1=md5($_FILES["image"]["name"].time()).".".$type1;
			if($type1=="jpg" or $type1=="JPG" or $type1=="jpeg" or $type1=="JPEG" or $type1=="png" or $type1=="PNG" or $type1=="bmp" or $type1=="BMP" or $type1=="gif" or $type1=="GIF"){
				
				$path = "assets/images/modes".$file1; 
				$pathcomplete = "assets/images/modes".$file1;
				move_uploaded_file($_FILES['image']['tmp_name'], $pathcomplete);

				$sql="INSERT INTO `mode_paiement`(`mode`, `image`, `presentation`) VALUES ('".$mode."','".$pathcomplete."','".$presentation."')";
			} else{
				$sql="INSERT INTO `mode_paiement`(`mode`, `presentation`) VALUES ('".$mode."','".$presentation."')";
			}
				$req=mysql_query($sql);
		} else{
			$type1=pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION);
			$file1=md5($_FILES["image"]["name"].time()).".".$type1;
			if($type1=="jpg" or $type1=="JPG" or $type1=="jpeg" or $type1=="JPEG" or $type1=="png" or $type1=="PNG" or $type1=="bmp" or $type1=="BMP" or $type1=="gif" or $type1=="GIF"){
				
				$path = "assets/images/modes/".$file1; 
				$pathcomplete = "assets/images/modes/".$file1;
				move_uploaded_file($_FILES['image']['tmp_name'], $pathcomplete);

				$sql="UPDATE `mode_paiement` SET `mode`='".$mode."', `image`='".$pathcomplete."', `presentation`='".$presentation."' where id=".$id;
			} else{
				$sql="UPDATE `mode_paiement` SET `mode`='".$mode."',`presentation`='".$presentation."' where id=".$id;
			}
				$req=mysql_query($sql);			
		}
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="?suc=succes" </SCRIPT>';
	}

	$mode				=	"" ;	
	$image				=	"" ;	
	$presentation		=	"" ;	
	
	$req="select * from mode_paiement where id=".$id;
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query))
	{
		$mode				=	$enreg["mode"] ;	
		$image				=	$enreg["image"] ;	
		$presentation		=	$enreg["presentation"] ;	
	}

?>				

				<div class="row">
				<form action="" method="POST" enctype="multipart/form-data"> 
					<div class="col-md-12 row">
						<?php if(isset($_GET['suc'])){ ?>
							<?php if($_GET['suc']=='succes'){ ?>
								<font color="green" ><center>L'ajout de mode paiement a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
							<?php if($_GET['suc']=='succes1'){ ?>	
								<font color="green" ><center>La modification a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
						<?php } ?>						
						<hr>
						<div class="col-md-3">
							<b>Mode de paiement(*)</b><br>
							<input type="text" class="form-control" name="mode" id="mode" value="<?php echo $mode;?>" required >
						</div>
						<div class="col-md-3">
							<b>Image </b><br>
							<input type="file" class="form-control" name="image" id="image">
							<?php if(file_exists($image)) { ?>
								<img src="<?php echo $image; ?>" style="width:50px">
							<?php } ?>							
						</div>

						<div class="col-md-6">
							<b>Présentation</b><br>
							<textarea class="form-control" name="presentation" id="presentation"><?php echo $presentation; ?></textarea>
						</div>					
						<div class="col-md-2"><br>
								<button type="submit" onclick="CreateTodo();" class="btn btn-primary"   style="background-color:#0d7cbc;border-color: #8833ff;">Enregistrer</button>
								<input class="form-control" type="hidden" name="enregistrer_mail">
						</div>						
					</div>
				</form>	
				
					<hr><b>Liste de mode de paiement</b>
					<div class="col-md-12 row">
					<div class="table-responsive mt-3">
					   <table class="table align-middle mb-0" style="border: solid 1px;">
						   <thead class="table-light">
							   <tr  style="color:#525f7f">
								   <th>Mode de paiement</th>
								   <th>Image</th>
								   <th>Présentation</th>
								   <th>Actions</th>
							   </tr>
						   </thead>
						   <tbody>						
<?php
	$req1="select * from mode_paiement order by id";
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
		$mode				=	$enreg1["mode"] ;	
		$image				=	$enreg1["image"] ;	
		$presentation		=	$enreg1["presentation"] ;			
	
?>			
								<tr style="border: solid 1px;">
									 <td><?php echo $mode;?></td>
									 <td>
										<?php if(file_exists($image)) { ?>
											<a href="<?php echo $image; ?>" target="_blank"> <img src="<?php echo $image; ?>" style="width:50px"></a>
										<?php } ?>											
									 </td>
									 <td><?php echo nl2br($presentation); ?></td>
									 <td>
										<a href="modes.php?ID=<?php echo $id; ?>"><i class="bx bxs-edit" style="color:#0d7cbc"></i></a>
										<a href="Javascript:Supprimer('<?php echo $id; ?>')"><i class="bx bxs-trash"  style="color:red"></i></a>
									 </td>
								</tr>
								<hr>
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
	<script>
		$("#generer").on("click", function(){
			$.getJSON("pages_json/genereation_mdp.php", function (data, status) {
				if (status == "success") {
					MDP			=	data.MDP;
				}
					$("#motdepasse").val(MDP);
			});
		});
	</script>