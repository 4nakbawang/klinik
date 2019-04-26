<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>
<div class="page-header col-md-12">
	<div>
		<h1>Rincian Biaya Pasien</h1>
	</div>
<div>
<br/>

<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> ID/Nama Pasien/No.RM  </div>
													<input type="text" name="" id="nomor-kunjungan" value="<?php echo $identitas['id']; ?>" hidden>
													<div class="profile-info-value" style="background-color:  #ffe6f9;">
														<h4><b><span class="editable" id="username"><?php echo $identitas['id']; ?> / <?php echo $identitas['nama_pasien']; ?> / <?php echo $identitas['id_pasien']; ?></span></b></h4>

													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Nama Pasien </div>

													<div class="profile-info-value">
														<span class="editable" id="username"><?php echo $identitas['nama_pasien']; ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Alamat </div>

													<div class="profile-info-value">
														<span class="editable" id="username"><?php echo $identitas['alamat']; ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Total Tagihan </div>

													<div class="profile-info-value">
														<span class="editable" id="load-total"> </span>
													</div>
												</div>
											</div>
</div>
<br/>

<div class="row">
									<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-file bigger-120"></i>
														Layanan
													</a>
												</li>

												<li id="obat-obatan">
													<a data-toggle="tab" href="#obat" >
														Obat-Obatan
														
													</a>
												</li>
												<li>
													<a data-toggle="tab" href="#diagnosa">
														Diagnosa
													</a>
												</li>

												
											</ul>

											<div class="tab-content">
												<div id="home" class="tab-pane fade in active">
													<div class="row">
															<input type="text" id="idkunjungan" value="<?php echo $identitas['id']; ?>" hidden>
															<div class="col-md-2 ">
																<input type="text" name="carilayanan" id="carilayanan" class="form-control" placeholder="masukan pencarian.." autofocus>
																
															</div>

															<div class="col-md-1" style="margin-right: 40px;">
																<input type="text" name="id" id="id_layanan" placeholder="id layanan" hidden >
																<input type="text" id="harga-layanan" placeholder="harga" disabled="" required>
																<input type="text" id="nama-layanan" placeholder="nama_layanan"  hidden>
															</div>
															<div class="col-md-1">
																<input type="number" class="form-control col-md-2" name="qty" id="qty-layanan" placeholder="qty" required>
															</div>
															<div class="col-md-1" style="margin-right: 40px;">
																<input type="text" name="total" id="total-lay" placeholder="total" hidden="">
															</div>
															

													</div>
													<br/>
													<div class="row">
														<div class="load-layanan" style="margin: 15px;">
															
														</div>
													</div>
												</div>

												<div id="obat" class="tab-pane fade ">
													<div class="row">
														<div class="col-md-2">
																<input type="text" id="caribarang" name="" class="form-control" placeholder="masukan pencarian..." required>
														</div>
														<div class="col-md-1">
															<input type="text" id="id-barang" name=""  placeholder="id barang" hidden="">
															<input type="text" id="nama-barang"    placeholder="nama barang" hidden>
															<input type="text" id="harga-barang" name="" class="form-control" placeholder="harga" disabled="">
														</div>
														<div class="col-md-1">
															<input type="number" id="qty-barang" name="" class="form-control" placeholder="qty">
															<input type="text" name="total" id="total-barang" placeholder="total" hidden required>
														</div>
													</div>

														<div class="row" >
															<div class="load-barang" style="margin: 15px;">
																
															</div>
														</div>

													</div>
												
												<div id="diagnosa" class="tab-pane fade">
													<div class="row">
														<div style="margin: 10px;">
															<form action="<?php echo base_url('rincian/addDiagnosa'); ?>" method="post">
																<input type="text" name="idkunjungan" value="<?php echo $identitas['id']; ?>" hidden>
																<table class="table">
																	<tr>
																		<td>Diagnosa Awal</td>
																		<td>:</td>
																		<td>
																			<textarea class="form-control" name="diagnosa_awal" style=" width: 500px; height: 50px;" autofocus>
																				<?php echo $diagnosa['diagnosa_awal']; ?>
																			</textarea>
																		</td>
																	</tr>
																	<tr>
																		<td>Tindakan</td>
																		<td>:</td>
																		<td>
																			<textarea class="form-control" name="tindakan" style=" width: 500px; height: 50px;" >
																				<?php echo $diagnosa['tindakan']; ?>
																			</textarea>
																		</td>
																	</tr>
																	<tr>
																		<td>Diagnosa Akhir</td>
																		<td>:</td>
																		<td>
																			<textarea class="form-control" name="diagnosa_akhir" style=" width: 500px; height: 50px;">
																				<?php echo $diagnosa['diagnosa_akhir']; ?>
																			</textarea>
																		</td>
																	</tr>
																	<tr>
																		<td colspan="2"></td>
																		<td>
																			<button type="submit" name="submit" class="btn btn-sm btn-primary fa fa-print" align="right"> Update</button>
																		</td>
																	</tr>
																</table>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br/>
										
<a class="btn btn-success  btn-sm pull-left fa fa-print print-rincian" style="margin-bottom:5px; margin-top: none;"><span class="fa fabbbb-print"></span> &nbsp; PRINT RINCIAN</a>




<script type="text/javascript">
	$(document).ready(function(){	

		id_kunjungan  = $('#nomor-kunjungan').val();
		$(".load-layanan").load("<?php echo base_url('rincian/load_data_layanan/'); ?>" +id_kunjungan);
		$(".load-barang").load("<?php echo base_url('rincian/load_data_barang/'); ?>"+id_kunjungan);
		$("#load-total").load("<?php echo base_url('rincian/load_total/'); ?>"+id_kunjungan);

		//autocomplete data layanan
		$( "#carilayanan" ).autocomplete({
              source: "<?php echo site_url('rincian/searchlayanan/?');?>",

              select: function (event, ui) {
                    $('[name="carilayanan"]').val(ui.item.label); 
                    $('#id_layanan').val(ui.item.id); 
                    $('#nama-layanan').val(ui.item.nama); 
                    $('#harga-layanan').val(ui.item.tarif); 
                    $('#qty-layanan').focus().val(1);
                }
          });

		$( "#caribarang" ).autocomplete({
              source: "<?php echo site_url('rincian/searchBarang/?');?>",

              select: function (event, ui) {
                    $('[name="caribarang"]').val(ui.item.label); 
                    $('#id-barang').val(ui.item.id); 
                    $('#nama-barang').val(ui.item.nama); 
                    $('#harga-barang').val(ui.item.harga); 
                    $('#qty-barang').focus().val(1);
                }
          });

		$( "#qty-barang" ).change(function() {
		  var qty = $(this).val();
		        var harga = $('#harga-barang').val();
		        var tot_barang = harga * qty;
		        
		        $('#total-barang').val(tot_barang);
		});

		 $( "#qty-barang" ).keyup(function() {
		  var qty = $(this).val();
		        var harga = $('#harga-barang').val();
		        var tot_barang = harga * qty;
		        
		        $('#total-barang').val(tot_barang);
		});

        $( "#qty-layanan" ).change(function() {
		  var qty = $(this).val();
		        var harga = $('#harga-layanan').val();
		        var tot_lay = harga * qty;
		        
		        $('#total-lay').val(tot_lay);
		});

		$('#obat-obatan').click(function(){
			$('#caribarang').focus();
		});

        $( "#qty-layanan" ).keyup(function() {
		  var qty = $(this).val();
		        var harga = $('#harga-layanan').val();
		        var tot_lay = harga * qty;
		        
		        $('#total-lay').val(tot_lay);
		});
        
        //submit data layanan (insert layanan pasien)
        $('#qty-layanan').on('keypress',function(e) {
		    if(e.which == 13) {
		    	var id_kunjungan  = $('#nomor-kunjungan').val();
		    	var id_layanan	  = $('#id_layanan').val();
		    	var qty 		  = $(this).val();
		    	var nama_layanan  = $('#nama-layanan').val();
		    	var harga_layanan = $('#harga-layanan').val();
		    	var total 		  = $('#total-lay').val();

		    	
		    	$.ajax({
				  type: "POST",
				  url: "<?php base_url(); ?>/klinik/rincian/save_layanan",
				  data: {
				  		id_kunjungan:id_kunjungan,
				  		id_layanan:id_layanan,
				  		nama_layanan:nama_layanan,
				  		harga_layanan:harga_layanan,
				  		qty:qty,
				  		total:total
				  	},
				  dataType: "json",
				  	beforeSend: function(){
				  		$('#harga-layanan').val('loading...');
				  		$('#tot_lay').val('loading...');
				  	},
				  	success: function(response){
				  		$(".load-layanan").load("<?php echo base_url('rincian/load_data_layanan/'); ?>" +id_kunjungan);
				  		$("#load-total").load("<?php echo base_url('rincian/load_total/'); ?>"+id_kunjungan);
				  		$('#tot_lay').val("");	
				  		$('#qty-layanan').val("");	
				  		$('#harga-layanan').val("");	
				  		$('#carilayanan').val("");	
				  		$('#carilayanan').focus();	
				  	}
				});
				

		    }
        })


        //submit data barang(insert barang pasien)
        $('#qty-barang').on('keypress',function(e) {
		    if(e.which == 13) {
		    	var id_kunjungan  = $('#nomor-kunjungan').val();
		    	var id_barang	  = $('#id-barang').val();
		    	var qty_barang 	  = $(this).val();
		    	var nama_barang   = $('#nama-barang').val();
		    	var harga_barang  = $('#harga-barang').val();
		    	var total_barang  = $('#total-barang').val();

		    	
		    	$.ajax({
				  type: "POST",
				  url: "<?php base_url(); ?>/klinik/rincian/save_barang",
				  data: {
				  		id_kunjungan:id_kunjungan,
				  		id_barang:id_barang,
				  		nama_barang:nama_barang,
				  		harga_barang:harga_barang,
				  		qty_barang:qty_barang,
				  		total_barang:total_barang
				  	},
				  dataType: "json",
				  	beforeSend: function(){
				  		$('#harga-barang').val('loading...');
				  		$('#total-barang').val('loading...');
				  	},
				  	success: function(response){
				  		$(".load-barang").load("<?php echo base_url('rincian/load_data_barang/'); ?>" +id_kunjungan);
				  		$("#load-total").load("<?php echo base_url('rincian/load_total/'); ?>"+id_kunjungan);	
				  		$('#total-barang').val("");	
				  		$('#qty-barang').val("");	
				  		$('#harga-barang').val("");	
				  		$('#caribarang').val("");	
				  		$('#caribarang').focus();	
				  	}
				});
				

		    }
        })
        
        $('.print-rincian').click(function(){
        	/*<?=base_url();?>rj_app/print_review_rincian?nomor='+nomor+'&t=<?=date("ishd");?>&poli=<?=$cur_poli;?>*/
        	window.open('<?php echo base_url(); ?>rincian/print_preview/'+id_kunjungan+'', 'Cetak Rincian', 'width=1050, height=900, scrollbars=1');
        });


        
		
	});
</script>
<?php $this->load->view('templates/footer'); ?>