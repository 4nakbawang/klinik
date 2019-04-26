<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>


<div class="page-header row">
	<div class="col-md-3">
		<h1>Daftar Kunjungan Pasien</h1>
	</div>

	<div class="col-md-10">
		<?php echo $this->session->flashdata('message'); ?><br/>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<a href="<?php echo base_url('master/pasien'); ?>" type="button" class="btn btn-info btn-xs" ><i class="glyphicon glyphicon-user"></i> Pasien Baru</a>
		<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i> Daftar Kunjungan</button>

	</div>
	<div class="col-md-6">
		
	</div>
	<div class="col-md-1" style="text-align: center;">
		<label style="text-align: center;">Filter by Date:</label>
	</div>
	<form method="get" action="<?php echo base_url('pendaftaran'); ?>">
		<div class="col-md-1">
			<b>
			<input type="date" name="date" id="tgl-search" class="form-control " value="<?php echo date('Y-m-d') ?>" style="float:left; background-color: #dcdfe5; color:black; width: 140px;">
			</b>
		</div>
		<div class="col-md-1" > 
			<button class="btn btn-sm btn-primary text-align right">Search</button>
			<a class="btn btn-sm btn-info text-align right fa fa-refresh" id="reload" ></a>
		</div>
	</form>
</div>
	
<hr/>
<table class="table table-bordered" id="example">
	<thead>
		<tr class="success">
			<th>NO</th>
			<th>ID.Kunj</th>
      		<th>Tanggal</th>
      		<th>ID Pasien</th>
			<th>Nama Pasien</th>
			<th>Alamat</th>
			<th>Jenis Pasien</th>
			<th>Dokter Pemeriksa</th>
		    <th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no=1;
			foreach ($record as $r){
				?>
				<tr>
					<td><?php echo $no; ?></td>
		            <td><?php echo $r['id']; ?></td>
		            <td><?php echo $r['tanggal']; ?></td>
		            <td><?php echo $r['id_pasien']; ?></td>
		            <td><?php echo $r['nama_pasien']; ?></td>
		            <td><?php echo $r['alamat']; ?></td>
		            <td><?php echo $r['jenis_pasien']; ?></td>
		            <td><?php echo $r['nd']; ?></td>
					<td><?php echo $r['status']; ?></td>
					<td style="width: 20%;">
						<a href="<?php echo base_url('rincian/headerRincian/'.$r['id'].''); ?>" class="btn btn-info btn-xs fa fa-pencil-square-o"> Rincian</a>
            			<a href="<?php echo base_url('pendaftaran/rujukan/'.$r['id'].''); ?>" class="btn btn-warning btn-xs fa fa-file"> Buat Rujukan</a>
            			<a href="<?php echo base_url('pendaftaran/batalrawat/'.$r['id'].''); ?>" class="btn btn-danger btn-xs fa fa-trash"> Batal Rawat</a>
					</td>
				</tr>	
				<?php
				$no++;
			}
		?>
	</tbody>
</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pendaftaran Pasien</h4>
      </div>
      <div class="modal-body">
        
				
			<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li class="active">
													<a data-toggle="tab" href="#daftarpasien">
														<i class="green ace-icon fa fa-home bigger-120"></i>
														List Pasien
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#bridgingbpjs">
														Bridging BPJS
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#manual">
														Manual
													</a>
												</li>
												
											</ul>

											<div class="tab-content">
												<div id="daftarpasien" class="tab-pane fade in active">
													<table class="table table-bordered" id="pasien">
														<thead>
															<tr>
															<th>NO</th>
															<th>No BPJS</th>
															<th>NIK</th>
															<th>No RM</th>
															<th>Nama Pasien</th>
															<th>Gender</th>
															<th>Tgl.Lahir</th>
															<th>Alamat</th>
															<th></th>
														</tr>
														</thead>
														<tbody>
															<?php
															$no=1;
																foreach($pasien as $p)
																{
																	?>
																		<tr>
																			<td><?php echo $no; ?></td>
																			<td><?php echo $p['no_bpjs']; ?></td>
																			<td><?php echo $p['nik']; ?></td>
																			<td><?php echo $p['no_rm']; ?></td>
																			<td><?php echo $p['nama_pasien']; ?></td>
																			<td><?php echo $p['gender']; ?></td>
																			<td><?php echo $p['tgl_lahir']; ?></td>
																			<td><?php echo $p['alamat']; ?></td>
																			<td>
																				<a href="" class="btn btn-xs btn-danger fa fa-trash" data-toggle="tooltip" data-placement="top" title="sok delete wani mah!"></a>
																			</td>
																		</tr>
																	<?php
																	$no++;
																}
																
															?>
														</tbody>
														
													</table>
												</div>

												<div id="bridgingbpjs" class="tab-pane fade" style="">
													<form class="form-inline" style="">
													  <div class="form-group">
													    <label class="sr-only"></label>
													    <select class="form-control" name="">
													    	<option value="no_bpjs">Nomor BPJS</option>
													    	<option value="nik">NIK</option>
													    </select>
													  </div>
													  <div class="form-group">
													    <label class="sr-only"></label>
													    <input type="text" class="form-control"  placeholder="masukan Nomor ..">
													  </div>
													  <div class="checkbox">
													   
													  </div>
													  <button type="submit" class="btn btn-default fa fa-search"> Cari..</button>
													</form>

													<div class="" style="margin-top: 10px;">
														<div class="row">
															<div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-6">
																<div class="widget-box widget-color-dark light-border" id="widget-box-6">
																	<div class="widget-header">
																		<h5 class="widget-title smaller">Informasi Kepesertaan pasien </h5>

																		<div class="widget-toolbar">
																			<span class="badge badge-success">
																				<i class="ace-icon fa fa-share"></i>
																				<a id="daftar" class="btn btn-success btn-sm">Daftarkan!</a>
																			</span>
																		</div>
																	</div>

																	<div class="widget-body">
																		<div class="widget-main padding-6">
																			<div class="alert alert-info"> foreach JSON API </div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<!--form pendaftaran bridging-->
													<div id="frmBridging" style="" class="row">
														<div class="" style="margin-top: 10px;">
														<div class="col-xs-12 col-sm-12">
															<div class="widget-box">
																<div class="widget-header">
																	<h4 class="widget-title">Form Pendaftaran Pasien</h4>

																	<div class="widget-toolbar">
																		<a href="#" data-action="collapse">
																			<i class="ace-icon fa fa-chevron-up"></i>
																		</a>

																		<a href="#" data-action="close">
																			<i class="ace-icon fa fa-times"></i>
																		</a>
																	</div>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		di isi form input
																	</div>
																</div>
															</div>
														</div><!-- /.span -->

													</div>
													</div>

													<button class="btn btn-info btn-sm fa fa-print"> Cetak SEP</button>
													<button class="btn btn-success btn-sm fa fa-print"> Save</button>
													
												</div>

												<div id="manual" class="tab-pane fade">
													<form method="post" action="<?php echo base_url('pendaftaran/addPendaftaran');?>">
											        	<div class="form">
											        		<div class="form-group">
											        			<label>Tanggal</label>
											        			<input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" required >
											        		</div>
											        		<div class="form-group">
											        			<label>ID Pasien</label>
											        			<div class="row">
												        			<div class="col-md-2">
												        				<select class="form-control">
													        				<option value="BARU">BARU</option>
													        				<option value="LAMA">LAMA</option>
													        			</select>
												        			</div>
												        			<div class="col-md-10">
												        				<div class="input-group">
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-check"></i>
																			</span>

																			<input type="text" class="form-control" name="id_pasien" id="auto-pasien" placeholder="Type your medical record"  autofocus=""	/>
																			<span class="input-group-btn">
																				<a href="<?php echo base_url('master/pasien'); ?>" class="btn btn-purple btn-sm">
																					<span class="ace-icon fa fa-user icon-on-right bigger-110"></span>
																					 Pasien Baru
																				</a>
																			</span>
																</div>
																	</span>
																</div>
												        			</div>
												        		</div>        			
											        		</div>
											        		<div class="form-group">
											        			<label>Nama Pasien</label>
											        			<b><input type="text" name="nama_pasien" id="nama_pasien" class="form-control" placeholder="masukan nama pasien" required style="background-color: #edf1f7;"  ></b>
											        			</select>
											        		</div>
												            <div class="form-group">
												              <label>Alamat</label>
												              <b><textarea name="alamat" id="alamat" class="form-control" placeholder="masukan alamat pasien" required style="background-color:  #edf1f7;" ></textarea></b>
												            </div>
												            <div class="form-group">
												              <label>Jenis Pasien</label>
												              <select name="jenis_pasien" class="form-control">
												              	<option value="BPJS">BPJS</option>
												              	<option value="UMUM">UMUM</option>
												              </select>
												            </div>
												            <div class="form-group">
											        			<label>Dokter</label>
											        			<select name="dokter" class="form-control">
											        				<?php
											        				foreach ($dokter as $d) {
											        					?>
											        						<option value="<?php echo $d['id']; ?>"><?php echo $d['nama_dokter']; ?></option>
											        					<?php
											        				}
											        				 ?>
											        				
											        			</select>
											        			</select>
											        		</div>
											             
											        	</div>
											      <div class="modal-footer">
											      	<button type="submit" name="submit" class="btn btn-primary">Save</button>
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											      </div>
											      </form>
												</div>

												
											</div>
										</div>
      </div>

  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
  	 
  	 $('#reload').click(function(){
  	 	window.location.reload();
  	 });

      $('#example').DataTable();
      $('#pasien').DataTable();

      

      $('#frmBridging').fadeOut();
      $('#daftar').click(function(){
      	 $('#frmBridging').fadeIn(1000);
      });
     
      //autocomplate cari pasien menggunakan no_rm
      $( "#auto-pasien" ).autocomplete({
              source: "<?php echo site_url('pendaftaran/searchpasien/?');?>",
               select: function (event, ui) {
                    $('#auto-pasien').val(ui.item.label); 
                    $('#nama_pasien').val(ui.item.nama_pasien); 
                    $('#alamat').val(ui.item.alamat); 
                }
             
		    });
  });
         
 
</script>
<?php $this->load->view('templates/footer'); ?>