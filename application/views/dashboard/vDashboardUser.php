<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>

<div class="page-header">
	<h1>
		Dashboard User
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			overview &amp; stats
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="alert alert-block alert-success">
			
			<div>
			<div class="table">
				<table class="table table-stripped">
					<tr>
						<td>Customer ID</td>
						<td>:</td>
						<td>
							<input type="text" name="id" value="P00001">
						</td>
					
						<td>Customer Name</td>
						<td>:</td>
						<td>
							<input type="text" name="id" value="customerNAme">
						</td>

						<td>Company</td>
						<td>:</td>
						<td>
							<input type="text" name="id" value="CompanyName">
						</td>

						<td>Booking Date</td>
						<td>:</td>
						<td>
							<input type="date" value="<?php echo date("Y-m-d"); ?> ">

						</td>
					</tr>
				</table>
			</div>
		</div>	
<div class="table" style="">
<div class="row" >
									<div class="col-sm-5">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													Billing Now - Layanan
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>name
																</th>

																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>price
																</th>

																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>status
																</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>Wifi/Internet</td>

																<td>
																	<small>
																		<s class="red">$29.99</s>
																	</small>
																	<b class="green">$19.99</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">Dibayar</span>
																</td>
															</tr>

															<tr>
																<td>Ruangan</td>

																<td>
																	<b class="blue">$16.45</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">Dibayar</span>
																</td>
															</tr>

															<tr>
																<td>Printer</td>

																<td>
																	<b class="blue">$15.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">Belum Bayar</span>
																</td>
															</tr>

															<tr>
																<td>PABX</td>

																<td>
																	<small>
																		<s class="red">$24.99</s>
																	</small>
																	<b class="green">$19.95</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">Belum Bayar</span>
																</td>
															</tr>

															<tr>
																<td>domain.com</td>

																<td>
																	<b class="blue">$12.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">Belum Bayar</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

	
	<div class="col-sm-7">
		<h3>Grafic penggunaan layanan</h3>
		<div class="">
			<canvas id="myChart"></canvas>
			
		</div>
	</div>
	</div>
</div>


<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Wifi/Internet", "Ruangan", "Printer", "PABX", "domain.com"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 23, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
<?php $this->load->view('templates/footer'); ?>

