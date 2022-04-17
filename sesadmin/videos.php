<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');
?>
<script>
function Supprimer(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_videos.php?ID="+id ;
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
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion des vidéos</li>
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
		
		$url		=	addslashes($_POST["url"]) ;	
		
		if($id==0){	
				$sql="INSERT INTO `videos` (`url`) VALUES ('".$url."')";
				$req=mysql_query($sql);
			}
				
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="?suc=succes" </SCRIPT>';
	}

	$url				=	"" ;	
	
	$req="select * from videos where id=".$id;
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query))
	{
		$url				=	$enreg["url"] ;	
	}

?>				

				<div class="row">
				<form action="" method="POST" enctype="multipart/form-data"> 
					<div class="col-md-12 row">
						<?php if(isset($_GET['suc'])){ ?>
							<?php if($_GET['suc']=='succes'){ ?>
								<font color="green" ><center>L'ajout a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
							<?php if($_GET['suc']=='succes1'){ ?>	
								<font color="green" ><center>La modification a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
						<?php } ?>						
						<hr>
						<div class="col-md-6">
							<b>Lien Youtube</b><br>
							<input type="text" class="form-control" name="url" id="url" required>
						</div>
				
						<div class="col-md-2"><br>
								<button type="submit" onclick="CreateTodo();" class="btn btn-primary"   style="background-color:#0d7cbc;border-color: #8833ff;">Enregistrer</button>
								<input class="form-control" type="hidden" name="enregistrer_mail">
						</div>						
					</div>
				</form>	
				
					<hr><b>Liste des videos</b>
					<div class="col-md-12 row">
					<div class="table-responsive mt-3">
					   <table class="table align-middle mb-0" style="border: solid 1px;">
						   <thead class="table-light">
							   <tr  style="color:#525f7f">
								   <th>URL</th>
								   <th>Actions</th>
							   </tr>
						   </thead>
						   <tbody>						
<?php
	$etat	=	"";
	$req1="select * from videos order by id";
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
		$url				=	$enreg1["url"] ;	
		
	
?>			
								<tr style="border: solid 1px;">
									 <td>
										<?php echo $url; ?>										
									 </td>
									 <td>
									
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