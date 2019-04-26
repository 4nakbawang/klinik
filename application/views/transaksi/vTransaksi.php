<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>
<div class="page-header col-md-12">
	<div class="col-md-2">
		<h1>Transaksi Apotik</h1>
	</div>
	<div class="col-md-10">
		<span>tgl: <b><?php echo date('Y-m-d'); ?></b></span>
	</div>
	
</div>
<br/>


<div class="row">
  <div class="col-lg-1">
  	<button type="Sumbit" class="btn btn-primary btn-sm">New</button>
  </div>
  <div class="col-lg-2">
  	<label>Atas Nama:</label>
    <input type="text" class="form-control" placeholder="masukan nama pasien">
  </div>
  <div class="col-lg-3">
  	<label>Alamat:</label>
    <input type="text" class="form-control" placeholder="masukan alamat">
  </div>
</div>
<br/>
<div class="" style="background-color: #9dbae8; text-align: center;">
	<label ><b>List Barang</b></label>
</div>
<br/>
<div class="row">
  <div class="col-lg-2">
   <select name="nama_barang" class="form-control">
   	<option>--Silahkan Pilih--</option>
   	<?php
   	foreach ($barang as $b) {
   		?>
   		<option value="<?php echo $b['id']; ?>"><?php echo $b['nama_barang']; ?></option>
   		<?php
   		# code...
   	}
   	?>
   </select>
  </div>
  <div class="col-lg-3">
    <input type="text" class="form-control" placeholder="qty">
  </div>  
</div>
<br/>
<table class="table table-bordered">
	<tr class="success">
		<th>NO</th>
		<th>Nama Barang</th>
		<th>Satuan</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Total</th>
		<th>Action</th>
	</tr>
	<tr>
		<td colspan="5" align="right"><b>Total</b></td>
		<td colspan="5"><b>Rp. 0, - </b></td>
	</tr>
</table>
<button class="btn btn-primary btn-sm">Print</button>


<?php $this->load->view('templates/footer'); ?>
