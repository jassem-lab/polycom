		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright <?php echo utf8_encode('©'); ?> 2022 PolyCom  - Plateforme <?php echo utf8_encode('créé par'); ?>  <a href="http:\\www.deltawebit.com\contact.php" target="_blanc" style="color:#0d7cbc"> Delta Web it</a></p>
		</footer>
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="./assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="./assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="./assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- highcharts js -->
	<script src="./assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="./assets/plugins/highcharts/js/highcharts-more.js"></script>
	<script src="./assets/plugins/highcharts/js/variable-pie.js"></script>
	<script src="./assets/plugins/highcharts/js/solid-gauge.js"></script>
	<script src="./assets/plugins/highcharts/js/highcharts-3d.js"></script>
	<script src="./assets/plugins/highcharts/js/cylinder.js"></script>
	<script src="./assets/plugins/highcharts/js/funnel3d.js"></script>
	<script src="./assets/plugins/highcharts/js/exporting.js"></script>
	<script src="./assets/plugins/highcharts/js/export-data.js"></script>
	<script src="./assets/plugins/highcharts/js/accessibility.js"></script>
	<script src="./assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="./assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="./assets/plugins/apexcharts-bundle/js/apex-custom.js"></script>	
	<!--app JS-->
	<script src="./assets/js/app.js"></script>
	<script src="./assets/plugins/select2/js/select2.min.js"></script>
	<script src='./assets/js/tinymce.min.js' referrerpolicy="origin">
	</script>	
	<script src="./assets/js/form-text-editor.js"></script>
	<script>
	
		  $("#id-notif").click(function(){
				var variable = "";
				$.post("pages_ajax/ajax_readnotification.php", variable, function (data, status) {	
					document.location.reload();
				}, 'json');
				$('.page-loader-wrapper').removeClass("show");	
		  });
		
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>	
</body>