<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>
<div class="page-header col-md-12">
		<h1>Penyesuaian Stok Apotik</h1>
</div>
<br/>
<button type="button" class="btn btn-info btn-sm fa fa-filter" data-toggle="modal" data-target="#myModal"> Tambah</button>
<br/>
<br/>

<div class="row" style="margin: 10px;">
	<div class="load-data-penyesuaian">
	</div>

</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add penyesuaian Stok</h4>
      </div>
      <div class="modal-body">
      	<form action="<?php base_url('transaksi/penyesuaian_stok');?>" method="post">
      		<div class="form-group">
      			<label>Tanggal</label>
      			<input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d');?>">
      		</div>
      		<div class="form-group">
      			<label>Petugas</label>
      			<input type="text" name="petugas" class="form-control" autofocus="" required="" placeholder="insert personil name">
      		</div>
      		<div class="form-group">
      			<label>Alasan disesuaikan</label>
      			<textarea class="form-control" rows="3" name="alasan" placeholder="alasan penyesuaian stok barang..." ></textarea>
      		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   	 </form>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".load-data-penyesuaian").load("<?php echo base_url('transaksi/load_data_penyesuaian/'); ?>");
	});
</script>
<?php $this->load->view('templates/footer'); ?>