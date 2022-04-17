<!doctype html>
<html lang="en">
<?php 
	session_start(); 
	include('connexion/cn.php'); 
?>
<?php 
if ( (isset($_SESSION['SES_ADMIN'])) ){
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="dashbord.php" </SCRIPT>';
	exit;
}
if ( (isset($_SESSION['SES_MEM'])) ){
	echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="dashbordcli.php" </SCRIPT>';
	exit;
}
?>	
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>PolyCom Tunisie - Administration de site </title>
</head>

<body>
	<!--wrapper-->
<?php
if(isset($_POST['username'])){		

	$LOGIN = addslashes($_POST["username"]) ;
	$MOTDEPASSE = addslashes($_POST["userpassword"]) ;

	$reqTestExistEmail=" select * from administrateurs where  mail='".$LOGIN."' and motdepasse='".$MOTDEPASSE."'";
	$queryTestExistEmail=mysql_query($reqTestExistEmail);
	if(mysql_num_rows($queryTestExistEmail)!=0){
		while($enregTestExistEmail=mysql_fetch_array($queryTestExistEmail))
		{
			$IDUTILISATEUR 						= $enregTestExistEmail['id'];
			$MAIL								= $enregTestExistEmail['mail'];
			$_SESSION['SES_ADMIN'] 				= $IDUTILISATEUR;
			$_SESSION['SES_MAIL'] 				= $MAIL;
			$_SESSION['SES_NOMUSER'] 			= $enregTestExistEmail['nom'].' '.$enregTestExistEmail['prenom'];	
		}
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="paremtrage.php" </SCRIPT>';
	}
			
	$reqTestExistEmail1="select * from membres where  mail='".$LOGIN."' and motdepasse='".$MOTDEPASSE."'";
	$queryTestExistEmail1=mysql_query($reqTestExistEmail1);
	if(mysql_num_rows($queryTestExistEmail1)!=0){
		while($enregTestExistEmail1=mysql_fetch_array($queryTestExistEmail1))
		{
			$IDUTILISATEUR 				= $enregTestExistEmail1['id'];
			$MAIL						= $enregTestExistEmail1['mail'];
			$_SESSION['SES_USER'] 		= $IDUTILISATEUR;
			$_SESSION['SES_MEM'] 		= $IDUTILISATEUR;
			$_SESSION['SES_MAIL']		= $MAIL;	
			$_SESSION['SES_NOMUSER'] 	= $enregTestExistEmail1['nom'].' '.$enregTestExistEmail1['prenom'];	
		}
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="dashbordcli.php" </SCRIPT>';		
	}

	$reqTestExistEmail2="select * from vendeurs where  mail='".$LOGIN."' and motdepasse='".$MOTDEPASSE."'";
	$queryTestExistEmail2=mysql_query($reqTestExistEmail2);
	if(mysql_num_rows($queryTestExistEmail2)!=0){
		while($enregTestExistEmail2=mysql_fetch_array($queryTestExistEmail2))
		{
			$IDUTILISATEUR 				 = $enregTestExistEmail2['id'];
			$MAIL						 = $enregTestExistEmail2['mail'];
			$_SESSION['SES_USER'] 		 = $IDUTILISATEUR;
			$_SESSION['SES_VEN'] 		 = $IDUTILISATEUR;
			$_SESSION['SES_MAIL']  		 = $MAIL;	
			$_SESSION['SES_NOMUSER'] 	 = $enregTestExistEmail2['raisionsocial'];	
		}
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="dashbord.php" </SCRIPT>';		
	}
		
		
		if( (mysql_num_rows($queryTestExistEmail)==0) and (mysql_num_rows($queryTestExistEmail1)==0) and (mysql_num_rows($queryTestExistEmail2)==0)){	
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="?err=nocpt" </SCRIPT>';
		}		
}
	?>
	<div class="wrapper">
		<div class="authentication-header"></div>
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="my-4 text-center">
									<img src="assets/logo.jpg" width="180" alt="" />
								</div>							
								<div class="p-4 rounded">
									<div class="text-center">
									<!--	<img src="assets/logo.png" style="width:50%">-->
										<h4 class="">Connexion à l'espace administrateur de votre site</h4>
									</div>
									<?php if(isset($_GET['err'])){ ?>
										<?php if($_GET['err']=='nocpt'){ ?>
										<font color="#ff0000" style="background-color:#FFFFFF;"><center>Vérifier votre saisie SVP !</center></font><br /><br />
										<?php } ?>
										<?php if($_GET['err']=='suc'){ ?>
										<font color="green" style="background-color:#FFFFFF;"><center>Vérifier votre boîte mail pour consulter votre mot de passe !</center></font><br /><br />
										<?php } ?>										
									<?php } ?>									
									<div class="form-body">
										<form class="row g-3"  action="" method="POST">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label" style="color:black">Adresse mail</label>
												<input type="email" class="form-control" id="username" name="username" placeholder="Enter votre adresse mail">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label" style="color:black">Mot de passe</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="userpassword" name="userpassword" placeholder="Enter votre mot de passe">
														<a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="mdp_oublie_ad.php" style="color:black">Mot de passe oublié ?</a>
											</div>											
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary" style="background-color:#0d7cbc;border-color: #8833ff;"><i class="bx bxs-lock-open"></i>Connecter</button>
												</div>
											</div>
										</form>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>