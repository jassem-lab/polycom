<!doctype html>
<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');

?>
		<div class="page-wrapper">
			<div class="page-content">
				
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="dashbord.php"><i class="bx bx-home-alt"  style="color:#0d7cbc"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion de présentation</li>
							</ol>
						</nav>
					</div>
				</div>
				
				
<?php
	$id = $_SESSION['SES_ADMIN'];
	
	if(isset($_POST['enregistrer_mail'])){	
		
		$presentation		=	addslashes($_POST["mytextarea"]) ;	

		
		$sql="UPDATE `presentation` SET `presentation`='".$presentation."' where id=".$id;	
		$req=mysql_query($sql);
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="?suc=succes1" </SCRIPT>';
		
	}

	$presentation				=	"" ;	

	$req="select * from presentation where id=".$id;
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query))
	{
		$presentation		=	$enreg["presentation"] ;
	
	}

?>	
				<div class="row">
				<form action="" method="POST"> 
					<div class="col-md-12 row">
						<?php if(isset($_GET['suc'])){ ?>
							<?php if($_GET['suc']=='succes1'){ ?>
							<font color="green" ><center>La modification a été effectué avec succès !</center></font><br /><br />
							<?php } ?>									
						<?php } ?>						
						<hr>
						<div class="col-md-12">
							<b>Présentation de l'entreprise</b><br>
							<textarea id="mytextarea" name="mytextarea"><?php echo $presentation; ?></textarea>
						</div>
											
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