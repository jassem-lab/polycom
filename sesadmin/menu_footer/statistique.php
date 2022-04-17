<script>
$(function () {
	"use strict";
	// chart 1
	Highcharts.chart('chartStat', {
		chart: {
			height: 350,
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
			styledMode: true
		},
		credits: {
			enabled: false
		},
		
		<?php 
				$req="select produit from detail_commande group by produit";
				$query=mysql_query($req);
				$num=mysql_num_rows($query);
		?>
		title: {
			text: 'Nombre des produits commandés :' + <?php echo $num; ?> 
		},
		subtitle: {
			text: 'Par Categorie '
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			}
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				innerSize: 120,
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
				},
				showInLegend: true
			}
		},
		series: [{
			name: 'pourcentage',
			colorByPoint: true,
			data: [
<?php
				$req_dev="select * from categorie";
				$query_dev=mysql_query($req_dev);
				while($enreg=mysql_fetch_array($query_dev))
				{
					$num=0;
					$req1="select * from detail_commande where exists (select * from produits where produits.id=detail_commande.produit and categorie=".$enreg['id']." )";
					$query1=mysql_query($req1);
					$num=mysql_num_rows($query1);					
?>					
			{
				name: "<?php echo $enreg['categorie']; ?>",
				y: <?php echo $num; ?>
			},
<?php } ?>			
			]
		}],
		responsive: {
			rules: [{
				condition: {
					maxWidth: 500
				},
				chartOptions: {
					plotOptions: {
						pie: {
							innerSize: 140,
							dataLabels: {
								enabled: false
							}
						}
					},
				}
			}]
		}
	});
	
	
	Highcharts.chart('chartStat1', {
		chart: {
			height: 350,
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
			styledMode: true
		},
		credits: {
			enabled: false
		},
		
		<?php 
				$req="select produit from detail_commande group by produit";
				$query=mysql_query($req);
				$num=mysql_num_rows($query);
		?>
		title: {
			text: 'Nombre des produits commandés :' + <?php echo $num; ?> 
		},
		subtitle: {
			text: 'Par Sous categorie '
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			}
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				innerSize: 120,
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
				},
				showInLegend: true
			}
		},
		series: [{
			name: 'pourcentage',
			colorByPoint: true,
			data: [
<?php
				$req_dev="select * from souscategories";
				$query_dev=mysql_query($req_dev);
				while($enreg=mysql_fetch_array($query_dev))
				{
					$num=0;
					$req1="select * from detail_commande where exists (select * from produits where produits.id=detail_commande.produit and souscategorie=".$enreg['id']." )";
					$query1=mysql_query($req1);
					$num=mysql_num_rows($query1);					
?>					
			{
				name: "<?php echo $enreg['souscategorie']; ?>",
				y: <?php echo $num; ?>
			},
<?php } ?>			
			]
		}],
		responsive: {
			rules: [{
				condition: {
					maxWidth: 500
				},
				chartOptions: {
					plotOptions: {
						pie: {
							innerSize: 140,
							dataLabels: {
								enabled: false
							}
						}
					},
				}
			}]
		}
	});	
	
});	
</script>