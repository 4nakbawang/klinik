<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>
<div class="page-header col-md-12">
	<div>
		<h1>Data Layanan - Tarif</h1>
	</div>
<div>
<br/>

<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
<br/>
<br/>

<table class="table table-bordered" id="example">
  <thead>
  	<tr>
  		<th>NO</th>
  		<th>Nama Layanan</th>
  		<th>Jenis</th>
  		<th>Tarif</th>
  		<th>STATUS</th>
  		<th>ACTION</th>
  	</tr>
  </thead>
  <tbody>
  	<?php
  	$no=1;
  	foreach ($record as $r) {
  		?>
  			<tr>
  				<td><?php echo $no; ?></td>
  				<td><?php echo $r['nama_layanan']; ?></td>
  				<td><?php echo $r['jenis']; ?></td>
  				<td><?php echo $r['tarif']; ?></td>
  				<td><?php echo $r['status']; ?></td>
  				<td>
  					<a href="<?php echo base_url('master/updateLayanan/'.$r['id'].''); ?>" class="btn btn-info btn-xs fa fa-pencil-square-o"> edit</a>
              <a href="<?php echo base_url('master/delLayanan/'.$r['id'].''); ?>" class="btn btn-danger btn-xs fa fa-trash"> delete</a>
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
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Ruangan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('master/addLayanan');?>">
        	<div class="form">
        		<div class="form-group">
        			<label>Nama Layanan</label>
        			<input type="text" name="nama_layanan" class="form-control" placeholder="masukan nama Layanan.." required="">
        		</div>
        		<div class="form-group">
        			<label>Jenis</label>
        			<select name="jenis" class="form-control">
        				<option value="NON OPERATIF">NON OPERATIF</option>
        				<option value="OPERATIF">OPERATIF</option>
        			</select>
        		</div>
        		<div class="form-group">
        			<label>Tarif</label>
        			<input type="text" name="tarif" class="form-control" placeholder="masukan tarif.." required="">
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

<script type="text/javascript">
  
  $(document).ready(function () {
   $('#example').DataTable();
  } );
</script>


<?php $this->load->view('templates/footer'); ?>
