<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>

<div class="page-header">
	<h1>
		Dashboard Admin
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
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Welcome to
									<strong class="green">
										Admin
										<small>(v1.4)</small>
									</strong>,
	Selamat datang di aplikasi billing klinik Ardami
								</div>

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-7 infobox-container">
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-credit-card"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">32</span>
												<div class="infobox-content">Transaksi Berhasil</div>
											</div>

											<div class="stat stat-success">8%</div>
										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-users"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">12</span>
												<div class="infobox-content">Jumlah Pasien</div>
											</div>

											<div class="badge badge-success">
												+32%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-edit"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">12</span>
												<div class="infobox-content">Kunjungan hari ini</div>
											</div>
											<div class="stat stat-important">4%</div>
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-home"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">7</span>
												<div class="infobox-content">Ruangan</div>
											</div>
										</div>

										<div class="infobox infobox-orange2">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-print"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">6,251</span>
												<div class="infobox-content">Penggunaan Printer</div>
											</div>

											<div class="badge badge-success">
												7.2%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-blue2">
											<<div class="infobox-icon">
												<i class="ace-icon fa fa-globe"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-text">Internet/WIFI</span>

												<div class="infobox-content">
													<span class="bigger-110">~</span>
													58GB remaining
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="61" data-size="39">
													<span class="percent">61</span>%
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Task</div>
												<div class="infobox-content">Completion</div>
											</div>
										</div>

										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-chart">
												<span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Pendapatan</div>
												<div class="infobox-content">Rp. 50.123</div>
											</div>
										</div>

										<div class="infobox infobox-grey infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-download"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Downloads</div>
												<div class="infobox-content">1,205</div>
											</div>
										</div>
									</div>

									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Traffic Sources
												</h5>

												<div class="widget-toolbar no-border">
													<div class="inline dropdown-hover">
														<button class="btn btn-minier btn-primary">
															This Week
															<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
														</button>

														<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
															<li class="active">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
																	This Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	This Month
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Month
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder"></div>

													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
																&nbsp; likes
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
																&nbsp; tweets
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
																&nbsp; pins
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row -->





<?php $this->load->view('templates/footer'); ?>

