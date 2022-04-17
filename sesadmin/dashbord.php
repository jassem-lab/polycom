<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');

?>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				
				<div class="row">
					<?php 
					$reqstat="select * from commandes where etat=0";
					$querystat=mysql_query($reqstat);
					$num1=mysql_num_rows($querystat);
					?>
					<div class="col-md-3" style="margin-bottom:10px">					
						<span style="background-color:white!important;color:black!important" class="badge bg-light-success text-success w-100">
						<?php echo $num1; ?> commaande(s) <br><?php echo 'En cours'; ?>
						</span>
					</a>
					</div>
					<?php 
					$reqstat="select * from commandes where etat=1";
					$querystat=mysql_query($reqstat);
					$num1=mysql_num_rows($querystat);
					?>
					<div class="col-md-3" style="margin-bottom:10px">					
						<span style="background-color:green!important;black:black!important" class="badge bg-light-success text-success w-100">
						<?php echo $num1; ?> commaande(s) <br><?php echo 'Validé'; ?>
						</span>
					</a>
					</div>	
					<?php 
					$reqstat="select * from commandes where etat=2";
					$querystat=mysql_query($reqstat);
					$num1=mysql_num_rows($querystat);
					?>
					<div class="col-md-3" style="margin-bottom:10px">					
						<span style="background-color:orange!important;color:white!important" class="badge bg-light-success text-success w-100">
						<?php echo $num1; ?> commaande(s) <br><?php echo 'Annulé'; ?>
						</span>
					</a>					
					</div>	
					<?php 
					$reqstat="select * from commandes where etat=3";
					$querystat=mysql_query($reqstat);
					$num1=mysql_num_rows($querystat);
					?>
					<div class="col-md-3" style="margin-bottom:10px">					
						<span style="background-color:red!important;color:white!important" class="badge bg-light-success text-success w-100">
						<?php echo $num1; ?> commaande(s) <br><?php echo 'Réfusé'; ?>
						</span>
					</a>					
					</div>							
				</div>
				
				
				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="card radius-10">
							<div class="card-body">
								<div id="chartStat"></div>
							</div>
						</div>
					</div>	
					<div class="col-12 col-lg-12">
						<div class="card radius-10">
							<div class="card-body">
								<div id="chartStat1"></div>
							</div>
						</div>
					</div>					
				</div>				
				
						
				
			</div>
		</div>


<?php
	include('menu_footer/footer_ad.php');
	include('menu_footer/statistique.php');
?>

	