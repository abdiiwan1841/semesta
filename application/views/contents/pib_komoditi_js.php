<!-- echarts -->
<script src="<?php echo base_url('assets/libs/echarts-4.9.0/echarts.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/echarts-4.9.0/theme/inspired.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/jquery/footable/dist/footable-3.1.5.js'); ?>"></script>

<script type="text/javascript">
	$(document).ready(function() {
		function displayChart(chartName, data) {
			// Initialize after dom ready
			var myChart = echarts.init(document.getElementById(chartName));

			// Get data from ajax
			var option = data;

			// Load data into the ECharts instance 
			myChart.setOption(option);

			// Resize chart
			$(function () {

				// Resize chart on menu width change and window resize
				$(window).on('resize', resize);
				$(".menu-toggle").on('click', resize);

				// Resize function
				function resize() {
					setTimeout(function() {

						// Resize chart
						myChart.resize();
					}, 200);
				}
			});
		};

		$.ajax({
			url: "get_komoditi",
			method: "POST",
			// data: input,
			success: function(data) {
				displayChart('chart-pie-nilai', data["pieHsNilai"]);
				displayChart('chart-stack-nilai', data["stackHsNilai"]);
				displayChart('chart-pie-bm', data["pieHsBm"]);
				displayChart('chart-stack-bm', data["stackHsBm"]);
			}
		});

		$.ajax({
			url: "get_komoditi_test2",
			method: "POST",
			// data: input,
			success: function(data) {
				displayChart('chart-test2', data);
			}
		});
	});
</script>