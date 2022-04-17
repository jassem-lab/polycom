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
function SupprimerDet(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_detproduits.php?ID="+id ;
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
							<a href="addproduit.php" class="btn btn-primary" style="background-color:#0d7cbc;border-color: #8833ff;">Ajouter un nouveau produit</a>
						</div>
					</div>
				</div>

				<div class="row">
					
<?php
$reqProduit="";
$nomproduit="";
if(isset($_POST['nomproduit'])){
	if(($_POST['nomproduit'])){
		$nomproduit	=	$_POST['nomproduit'];
		$reqProduit	=	" and  produit like '%".$nomproduit."%'";
	}
}
$reqCategorie="";
$idcategorie="";
if(isset($_POST['idcategorie'])){
	if(($_POST['idcategorie'])){
		$idcategorie	=	$_POST['idcategorie'];
		$reqCategorie	=	" and  categorie =".$idcategorie;
	}
}
?>				
					<form name="SubmitContact" class="" method="post" action="" onSubmit="" style=''>
						Filtrage par:
						<div class="col-xl-12">
							<div class="row">
								<div class="col-xl-4">
									<b>Nom de produit</b>
									<input type="text" class="form-control" name="nomproduit" value="<?php echo $nomproduit; ?>">
								</div>	
								<div class="col-xl-4">
									<b>Catégorie</b><br>
									<select class="single-select" data-placeholder="" name="idcategorie" >
										<option value="">Sélectionner la catégorie</option>
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
					<div class="col-md-12 row">
					<b>Liste des produits</b>
					<div class="table-responsive mt-3">
					   <table class="table align-middle mb-0" style="border: solid 0.1px;">
						   <thead class="table-light">
							   <tr style="color:#525f7f">
								   <th>Ordre</th> 
								   <th>Nom de produit</th>
								   <th>Catégories<br>Sous-Catégorie</th>
								   <th>Image</th>
								   <th>Tarif</th>
								   <th>Stock</th>
								   <th>Remise</th>
								   <th>Détail</th>
								   <th>Fiche technique</th>
								   <th>Liste des images</th>
								   <th>Actions</th>
							   </tr>
						   </thead>
						   <tbody>						
<?php
	$req1="select * from produits where 1=1 ".$reqProduit.$reqCategorie."  order by ordre,produit";
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
		$produit			=	$enreg1["produit"] ;	
		$image				=	$enreg1["image"] ;	
		$prix				=	$enreg1["prix"] ;
		$detail				=	$enreg1["detail"] ;
		$fiche				=	$enreg1["fiche"] ;
		$stock				=	$enreg1["stock"] ;
		$remise				=	$enreg1["remise"] ;
		$new				=	$enreg1["new"] ;
		$ordre				=	$enreg1["ordre"] ;		
		
		$categorie			=	"";
		$reqc="select * from categorie where id=".$enreg1['categorie'];
		$queryc=mysql_query($reqc);
		while($enregc=mysql_fetch_array($queryc)){
			$categorie			=	$enregc['categorie'];
		}
		
		$scategorie			=	"";
		$reqc="select * from souscategories where id=".$enreg1['souscategorie'];
		$queryc=mysql_query($reqc);
		while($enregc=mysql_fetch_array($queryc)){
			$scategorie			=	$enregc['souscategorie'];
		}		
		
	
?>			
								<tr style="border: solid 0.1px;">
									 <td><?php echo $ordre;?></td>
									 <td><?php echo $produit;?></td>
									 <td><?php echo $categorie.'<br><i>'.$scategorie.'</i>';?></td>
									 <td>
										<?php if(file_exists($image)) { ?>
											<a href="<?php echo $image; ?>" target="_blank"><img src="<?php echo $image; ?>" style="width:60px"></a>
										<?php } ?>											
									 </td>
									  <td><?php echo $prix;?></td>
									   <td><?php echo $stock;?></td>
									    <td><?php echo $remise;?></td>
									 <td>
										<div class="col">
											<!-- Button trigger modal -->
											<i class="bx bxs-send me-3 font-20"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id;?>"></i>
											<!-- Modal -->
											<div class="modal fade" id="exampleModal<?php echo $id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Détail sur produit</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
																<?php echo $detail; ?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
														</div>
													</div>
												</div>
											</div>
										</div>									 
									 </td>
									 <td>
										<a href="<?php echo $fiche; ?>" target="_blank"><i class="bx bxs-send me-3 font-20"></i>	 </a>					 
									 </td>
									 <td>
										<div class="col">
											<!-- Button trigger modal -->
											<i class="bx bxs-send me-3 font-20"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $id;?>"></i>
											<!-- Modal -->
											<div class="modal fade" id="exampleModal2<?php echo $id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Liste des images</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<div class="table-responsive mt-3">
															   <table class="table align-middle mb-0" style="border: solid 0.1px;">
																   <thead class="table-light">
																	   <tr style="color:#525f7f">
																		   <th>Image</th>
																		   <th>Actions</th>
																	   </tr>
																   </thead>
																   <tbody>		
																	<?php
																		$ree="select * from images_produits where produit=".$id;
																		$quee=mysql_query($ree);
																		while($enn=mysql_fetch_array($quee)){																	
																	?>
																		<tr>
																			 <td>
																				<?php if(file_exists($enn['image'])) { ?>
																					<a href="<?php echo $enn['image']; ?>" target="_blank">
																						<img src="<?php echo $enn['image']; ?>" style="width:60px">
																					</a>
																				<?php } ?>											
																			 </td>
																			 <td>
																				<a href="Javascript:SupprimerDet('<?php echo $enn['id']; ?>')"><i class="bx bxs-trash"  style="color:red"></i></a>
																			 </td>
																		</tr>
																		<?php } ?>																	
																   </tbody>	
																 </table>	 
															</div>		
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
														</div>
													</div>
												</div>
											</div>
										</div>									 
									 </td>									 
									 <td>
										<a href="addproduit.php?ID=<?php echo $id; ?>"><i class="bx bxs-edit" style="color:#0d7cbc"></i></a>
										<a href="Javascript:Supprimer('<?php echo $id; ?>')"><i class="bx bxs-trash"  style="color:red"></i></a>
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
