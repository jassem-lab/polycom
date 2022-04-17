<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');
?>
<script>
function Desactiver(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/desactiver_membre.php?ID="+id ;
			}			    
	  }	
function Activer(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/activer_membre.php?ID="+id ;
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
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion des comptes membre</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="row">
					<hr><b>Liste de toutes les membres</b>
					<div class="col-md-12 row">
					<div class="table-responsive mt-3">
					   <table class="table align-middle mb-0">
						   <thead class="table-light">
							   <tr  style="color:#525f7f">
								   <th>Nom et Prènom</th>
								   <th>Téléphone</th>
								   <th>Mail</th>
								   <th>Ville<br>Région</th>
								   <th>Adresse</th>
								   <th>Etat</th>
								   <th>Actions</th>
							   </tr>
						   </thead>
						   <tbody>						
<?php
	$etat = "";
	$req1="select * from membres order by id";
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
		$nom				=	$enreg1["nom"] 	;
		$prenom				=	$enreg1["prenom"] ;	
		$mail				=	$enreg1["mail"] ;	
		$motdepasse			=	$enreg1["motdepasse"] ;	
		$telephone			=	$enreg1["telephone"] ;	
		$ville				=	"" ;
		$region				=	$enreg1["region"] ;	
		$adresse			=	$enreg1["adresse"] ;		
		
		$reqg="select * from gouvernorat where id=".$enreg1["ville"];
		$queryg=mysql_query($reqg);
		while($enreg=mysql_fetch_array($queryg)){
			$ville				=	$enreg["gouvernorat"] ;
		}
		
		if($enreg1['etat']==0){
			$etat = "<b style='color:green'>Actif</b>";
		} else{
			$etat = "<b style='color:red'>Inactif</b>";
		}
				
?>			
								<tr>
									 <td><?php echo $nom.' '.$prenom; ?></td>
									 <td><?php echo $telephone; ?></td>
									 <td><?php echo $mail; ?></td>
									 <td><?php echo $ville.'<br>'.$region; ?></td>
									 <td><?php echo $adresse; ?></td>
									 <td><?php echo $etat; ?></td>
									 <td>
									 <?php if($enreg1['etat']==0){ ?>
										<a href="Javascript:Desactiver('<?php echo $id; ?>')"><i style="color:red">Desactiver</i></a>
									 <?php }else{ ?>
										<a href="Javascript:Activer('<?php echo $id; ?>')"><i style="color:green">Activer</i></a>
									 <?php }?>
										
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