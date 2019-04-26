<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>
<div class="page-header row">
	<div class="col-md-2">
		<h1>Laporan Kunjungan Pasien</h1>
	</div>

	<div class="col-md-10">
		<?php echo $this->session->flashdata('message'); ?><br/>
	</div>
</div>
<div class="row" style="margin: 10px;">
	<div class="col-md-2">
		<button class="btn btn-sm btn-primary fa fa-filter" data-toggle="modal" data-target="#myModal"> Filter</button>
		<button class="btn btn-sm btn-primary fa fa-change"> Export .Xls</button>
	</div>
	<div class="col-md-10" >
		<label style="background-color: #d3b0f4; border: 1px;"> Periode:</label>	
	</div>
</div>


<table class="table table-bordered">
	<tr class="success">
		<th>NO</th>
		<th>TGL KUNJUNGAN</th>
		<th>NO RM</th>
		<th>NAMA PASIEN</th>
		<th>ALAMAT</th>
		<th>DOKTER</th>
		<th>TOT.LAYANAN</th>
		<th>TOT.BARANG</th>
		<th>TOTAL</th>
	</tr>
	<?php 
	$no=1;
	foreach ($record as $r) {
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $r['tanggal']; ?></td>
			<td><?php echo $r['id_pasien']; ?></td>
			<td><?php echo $r['nama_pasien']; ?></td>
			<td><?php echo $r['alamat']; ?></td>
			<td><?php echo $r['dokter']; ?></td>
			<td><?php echo $r['layanan']; ?></td>
			<td><?php echo $r['barang']; ?></td>
			<td><?php echo ($r['layanan'] + $r['barang'] ); ?></td>
		</tr>
		<?php
		$no++;
	}
	?>
</table>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Filter Data Kunjungan</h4>
      </div>
      <div class="modal-body">
      	<form method="get" action="<?php echo base_url('pendaftaran/laporan_kunjungan') ?>">
	        <div class="form-group">
	        	
	        	<div class="col-md-5">
	        		<input type="date" name="tglmulai" class="form-control">
	        	</div>
	        	<div class="col-md-5">
	        		<input type="date" name="tglakhir" class="form-control">
	        	</div>
	        	<br/>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button name="submit" type="submit" class="btn btn-primary btn-sm" > Filter</button>
	      </div>
	   		</div>
		</form>
  </div>
</div>

<?php $this->load->view('templates/footer'); ?>