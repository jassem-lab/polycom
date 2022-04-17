<?php
	include('menu_footer/header.php');
?>


				<!--start shop area-->
				<section class="py-4">
					<div class="container">
						<div class="row">
							
							<div class="col-12 col-xl-12">
								<div class="col-md-12 row">
										<?php 
					
											$reqprd="select * from pubs";
											$queryprd=mysql_query($reqprd);
											while($enregprd=mysql_fetch_array($queryprd)){
												$id					=	$enregprd["id"] 	;
												$image				=	$enregprd["image"] ;	
										?>	
											<div class="col-md-3" style="    margin-bottom: 20px;">
												<a href="<?php echo $enregprd['image']; ?>" target='_blank'>
													<img src="<?php echo $enregprd['image']; ?>"  style="height: 250px;width: 250px;">
												</a>	
											</div>

										<?php } ?>		
								</div>
							
							</div>
							
							
							
							<d
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end shop area-->

<?php
	include('menu_footer/footer_2.php');
?>
