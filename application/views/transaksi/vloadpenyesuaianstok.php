<table class="table table-bordered">
	<tr class="success">
		<th>NO</th>
		<th>Tanggal</th>
		<th>Petugas</th>
		<th>Alasan Penyesuaian</th>
		<th>Jml Item</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	<?php 
	$no=1;
	foreach ($penyesuaian as $p) {
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $p['tanggal']; ?></td>
			<td><?php echo $p['petugas']; ?></td>
			<td><?php echo $p['alasan']; ?></td>
			<td>2</td>
			<td><?php echo $p['status']; ?></td>
			<td>
				<a href="#" class="btn btn-sm btn-info fa fa-edit"> List Barang</a>
				<a href="#" class="btn btn-sm btn-danger fa fa-edit"> Approve</a>
				
			</td>
		</tr>
		<?php 
		$no++;
		# code...
	}

	?>
</table>