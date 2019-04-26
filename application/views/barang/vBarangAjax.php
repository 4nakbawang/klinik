<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

	<script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous"></script>
</head>
<body>

</body>
</html>
	
<div>
	<div class="col-md-2">
		<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
	</div>
	<div class="col-md-4" style="">
	<?php echo $this->session->flashdata('message'); ?><br/>
	</div>
</div>
<br/>
<br/>
<table class="table table-bordered" id="example">
	<thead>
		<tr class="success">
			<th>NO</th>
      		<th>Nama Barang</th>
			<th>Satuan Besar</th>
			<th>Satuan Kecil</th>
			<th>Harga Beli</th>
      		<th>Margin</th>
			<th>Harga Jual</th>
			<th>Generik Status</th>
      		<th>Jenis</th>
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
         			  <td><?php echo $r['nama_barang']; ?></td>
					  <td><?php echo $r['satuan_besar']; ?></td>
			          <td><?php echo $r['satuan_kecil']; ?></td>
			          <td><?php echo $r['harga_beli']; ?></td>
			          <td><?php echo $r['margin']; ?></td>
			          <td><?php echo $r['harga_jual']; ?></td>
			          <td><?php echo $r['generik_status']; ?></td>
			          <td><?php echo $r['jenis']; ?></td>
					  <td><?php echo $r['status']; ?></td>
					  <td>
						<a href="<?php echo base_url('master/updatePejabat/'.$r['id'].''); ?>" class="btn btn-info btn-sm fa fa-pencil-square-o">edit</a>
           				<a href="<?php echo base_url('master/deletePejabat/'.$r['id'].''); ?>" class="btn btn-danger btn-sm fa fa-trash">delete</a>
					</td>
				</tr>	
				<?php
				$no++;
			}
		?>
	</tbody>
</table>
<script type="text/javascript">
  
  $(document).ready( function () {
      $('#example').DataTable();
  } );
</script>
</html>