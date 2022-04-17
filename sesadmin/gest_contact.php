<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');
?>
<script>
function Supprimer(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_contact.php?ID="+id ;
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
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion des contact</li>
							</ol>
						</nav>
					</div>
				</div>
				
				<div class="row">
					<hr><b>Liste de contacts</b>
					<div class="col-md-12 row">
					<div class="table-responsive mt-3">
					   <table class="table align-middle mb-0" style="border: solid 1px;">
						   <thead class="table-light">
							   <tr style="color:#525f7f">
								   <th>Date </th>
								   <th>Nom et prénom</th>
								   <th>E-mail</th>
								   <th>Téléphone</th>
								   <th>Objet</th>
								   <th>Message</th>
								   <th>Actions</th>
							   </tr>
						   </thead>
						   <tbody>						
<?php
	$req1="select * from contact order by id desc";
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
	
?>			
								<tr style="border: solid 1px;">
									 <td><?php echo $enreg1["dateheure"];?></td>
									 <td><?php echo $enreg1["nom"];?></td>
									 <td><?php echo $enreg1["email"];?></td>
									 <td><?php echo $enreg1["telephone"];?></td>
									 <td><?php echo $enreg1["objet"];?></td>
									 <td><?php echo nl2br($enreg1["message"]);?></td>
									 <td>
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
