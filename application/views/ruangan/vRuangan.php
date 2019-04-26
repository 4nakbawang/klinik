<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>

<div class="page-header">
  <h1>Daftar Ruangan</h1>
</div>

<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
<br/>
<br/>

<table class="table table-bordered" id="example">
  <thead>
  	<tr>
  		<th>NO</th>
  		<th>NAMA RUANGAN</th>
  		<th>KETERANGAN</th>
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
  				<td><?php echo $r['nama_ruangan']; ?></td>
  				<td><?php echo $r['keterangan']; ?></td>
  				<td><?php echo $r['status']; ?></td>
  				<td>
  					<a href="<?php echo base_url('master/updatePejabat/'.$r['id'].''); ?>" class="btn btn-info btn-xs fa fa-pencil-square-o">edit</a>
              <a href="<?php echo base_url('master/deletePejabat/'.$r['id'].''); ?>" class="btn btn-danger btn-xs fa fa-trash">delete</a>
  				</td>
  			</tr>

  		<?php
  		$no++;
  	}
  	?>
  </tbody>
</table>

<!-- Tes Jquery -->
<input type="text" name="" id="nilai1" value="2" onkeyup="hitung()">
<input type="text" name="" id="nilai2" value="0">
<input type="text" name="" id="hasil">
<button id="calculate">tes alert JQ</button>
<button id="klik">tes alert JQ klik</button>

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
        <form method="post" action="<?php echo base_url('master/addRuangan');?>">
        	<div class="form">
        		<div class="form-group">
        			<label>Nama Ruangan</label>
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

<script type="text/javascript">
  $("#calculate").click(function () {
    var nilai1 = $("#nilai1").val();
    var nilai2 = $("#nilai2").val();
    var total  = parseInt(nilai1) + parseInt(nilai2);
    $('#hasil').val(total);
  })

   $("#klik").click(function () {
    hitung();
  })

  function hitung(){
    var nilai1 = $("#nilai1").val();
    var nilai2 = $("#nilai2").val();
    var total  = parseInt(nilai1) + parseInt(nilai2);
    $('#hasil').val(total);
  }
  $(document).ready(function () {
   $('#example').DataTable();
  } );
</script>
<?php $this->load->view('templates/footer'); ?>

