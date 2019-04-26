<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>
<div class="page-header row">
	<div class="col-md-2">
		<h1>Tambah Data Pasien</h1>
	</div>

	<div class="col-md-10">
		<?php echo $this->session->flashdata('message'); ?><br/>
	</div>
</div>
	

<!--profile pasien-->
<div class="tab-content no-border padding-24">
												<div id="home" class="tab-pane in active">
													<div class="row">
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?php echo base_url('template/'); ?>assets/images/avatars/profile-pic.jpg" />
															</span>

															<div class="space space-4"></div>

															<a href="#" class="btn btn-sm btn-block btn-success">
																<i class="ace-icon fa fa-search bigger-120"></i>
																<span class="bigger-110">Cek Status BPJS</span>
															</a>

															<a href="#" class="btn btn-sm btn-block btn-primary">
																<i class="ace-icon fa fa-envelope-o bigger-110"></i>
																<span class="bigger-110">Send a message</span>
															</a>
														</div><!-- /.col -->

														<div class="col-xs-12 col-sm-9">
															<h4 class="blue">
																<span class="middle">Masukan Identitas Pasien</span>

																<span class="label label-purple arrowed-in-right">
																	<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
																	Pasien Baru
																</span>
															</h4>
															<form method="post" action="<?php echo base_url('master/addPasien'); ?>">
																<div class="profile-user-info">
																	<div class="profile-info-row">
																		<div class="profile-info-name"> No. Rekam Medik </div>

																		<div class="profile-info-value col-sm-2">
																			<input type="text" name="no_rm" id="no_rm" class="form-control" value="<?php echo $new_number; ?>" placeholder="nomor Rekam Medik"  disabled>
																			<input type="text" name="no_rm_fix" id="no_rm_fix" 	 value="<?php echo $new_number; ?>" placeholder="nomor Rekam Medik" hidden >
																			<input type="checkbox" name="" id="manual"> manual
																		</div>
																	</div>
																	<div class="profile-info-row">
																		<div class="profile-info-name"> No. BPJS </div>

																		<div class="profile-info-value col-sm-3">
																			<input type="number" name="nomor_bpjs" class="form-control" placeholder="masukan nomor BPJS" >
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> No. KK </div>

																		<div class="profile-info-value col-sm-3">
																			<input type="number" name="nokk" class="form-control" placeholder="masukan nomor Kartu keluarga" >
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> NIK </div>

																		<div class="profile-info-value col-sm-3">
																			<input type="number" name="nik" class="form-control" placeholder="masukan nomor kependudukan" >
																		</div>
																	</div>

																	

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Nama Lengkap </div>

																		<div class="profile-info-value col-sm-5">
																			<input type="text" name="nama" class="form-control" placeholder="masukan nama pasien" required autofocus="">
																		</div>
																		<div class="profile-info-value col-sm-5">
																			<select class="form-control" name="gender">
																				<option value="laki-laki">LAKI-LAKI</option>
																				<option value="perempuan">PEREMPUAN</option>
																			</select>
																		</div>

																	</div>


																	<div class="profile-info-row">
																		<div class="profile-info-name"> TGL. Lahir </div>

																		<div class="profile-info-value col-sm-3">
																			<input type="date" name="tglLahir" class="form-control" placeholder="masukan nomor kependudukan" required="" >
																		</div>
																	</div>



																	<div class="profile-info-row">
																		<div class="profile-info-name"> Alamat </div>

																		<div class="profile-info-value">
																			<div class="row">
																				<div class="col-md-4">
																					<textarea class="form-control" placeholder="alamat" name="alamat" required></textarea> 
																				</div>
																				<div class="col-md-2">
																					<select name="kecamatan" class="form-control">
																						<?php 
																							foreach ($kecamatan as $k){
																								?>
																									<option value="<?php echo $k['nama_kecamatan']; ?>"><?php echo $k['nama_kecamatan']; ?></option>
																								<?php
																							}
																						?>
																					</select>
																				</div>
																				<div class="col-md-2">
																					<input type="text" name="kab" class="form-control" placeholder="Kabupaten" value="BANDUNG" >
																				</div>
																				<div class="col-md-2">
																					<input type="text" name="prov" class="form-control" placeholder="Kabupaten" value="JAWA BARAT" >
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Agama </div>

																		<div class="profile-info-value col-md-2">
																			<input type="" name="agama" value="ISLAM" class="form-control" >
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Telpon </div>

																		<div class="profile-info-value">
																			<div class="col-md-3">
																				<input type="text" name="telpon1" class="form-control" placeholder="Telpon 1" >
																			</div>
																			<div class="col-md-3">
																				<input type="text" name="telpon2" class="form-control" placeholder="Telpon 2">
																			</div>
																		</div>
																	</div>
																

																	<div class="profile-info-row">
																			<div class="profile-info-name"> Email </div>

																			<div class="profile-info-value col-sm-3">
																				<input type="text" name="email"  class="form-control" placeholder="masukan alamat Email">
																			</div>
																	</div>
																
																		
																	</div><!-- /.col -->
																</div><!-- /.row -->

																<div class="space-20"></div>													
															</div><!-- /#home -->

													<div class="clearfix form-actions">
															<div class="col-md-offset-3 col-md-9">
																<button class="btn btn-info" type="submit">
																	<i class="ace-icon fa fa-check bigger-110 save-pasien"></i>
																	Submit
																</button>

																&nbsp; &nbsp; &nbsp;
																<button class="btn" type="reset">
																	<i class="ace-icon fa fa-undo bigger-110"></i>
																	Reset
																</button>
															</div>
														</div>
												</form>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Pasien Baru</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('master/addPasien');?>">
        	<div class="form">
        		<div class="form-group">
        			<label>No BPJS</label>
        			<input type="text" name="ruangan" class="form-control">
        		</div>
        		<div class="form-group">
        			<label>No KK</label>
        			<input type="text" name="ruangan" class="form-control">
        		</div>
        		<div class="form-group">
        			<label>NIK</label>
        			<input type="text" name="ruangan" class="form-control">
        		</div>
        		<div class="form-group">
        			<label>No RM</label>
        			<input type="text" name="ruangan" class="form-control">
        		</div>
        		<div class="form-group">
        			<label>Nama</label>
        			<input type="text" name="ruangan" class="form-control">
        		</div>
        		<div class="form-group">
        			<label>Keterangan</label>
        			<input type="text" name="keterangan" class="form-control">
        		</div>
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



<u><h3 align="center">Master Data Pasien</h3></u>
<table class="table table-bordered" id="pasien">
	<thead>
		<tr class="success">
			<th>NO</th>
			<th>NO RM</th>
			<th>NAMA PASIEN</th>
			<th>ALAMAT</th>
			<th>GENDER</th>
			<th>TGL LAHIR</th>
			<th>NO BPJS</th>
			<th>NO KK</th>
			<th>NIK</th>
			<th>AGAMA</th>
			<th>TELPON</th>
			<th>STATUS</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach ($pasien as $p) {
			?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $p['no_rm']; ?></td>
					<td><?php echo $p['nama_pasien']; ?></td>
					<td><?php echo $p['alamat']; ?></td>
					<td><?php echo $p['gender']; ?></td>
					<td><?php echo $p['tgl_lahir']; ?></td>
					<td><?php echo $p['no_bpjs']; ?></td>
					<td><?php echo $p['no_kk']; ?></td>
					<td><?php echo $p['nik']; ?></td>
					<td><?php echo $p['agama']; ?></td>
					<td><?php echo $p['telpon1']; ?></td>
					<td>
						<a href="#" class="btn btn-sm btn-warning fa fa-edit"></a>
						<a href="#" class="btn btn-sm btn-danger fa fa-trash"></a>
					</td>
				</tr>
			<?php
			$no++;
		}
		
		?>
	</tbody>
</table>


<script type="text/javascript">
	$(document).ready(function(){
		$('#manual').change(function(){
		   $("#no_rm").prop("disabled", false);
		   $("#no_rm").val('').focus();
		});

		$( "#no_rm" ).keyup(function() {
		  $("#no_rm_fix").val( $("#no_rm").val());
		});

		$('#pasien').DataTable();
	});
	
</script>

<?php $this->load->view('templates/footer'); ?>
