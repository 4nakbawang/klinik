<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>
<div class="page-header col-md-12">
	<div>
		<h1>Dokter</h1>
	</div>
<div>
<br/>
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
      		<th>Nama Dokter</th>
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
		            <td><?php echo $r['nama_dokter']; ?></td>
					<td><?php echo $r['status']; ?></td>
					<td>
						<a href="<?php echo base_url('master/updatePejabat/'.$r['id'].''); ?>" class="btn btn-info btn-xs fa fa-pencil-square-o"> Edit</a>
            			<a href="<?php echo base_url('master/delDokter/'.$r['id'].''); ?>" class="btn btn-danger btn-xs fa fa-trash"> Delete</a>
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
        <h4 class="modal-title">Tambah Data Dokter</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('master/addDokter');?>">
        	<div class="form">
        		<div class="form-group">
        			<label>Nama Dokter</label>
        			<input type="text" name="nama_dokter" class="form-control" placeholder="masukan nama dokter" required>
        		</div>
        		<div class="form-group" >
        			<label>Status</label>
        			<select name="status" class="form-control">
        				<option value="OPEN">OPEN</option>
        				<option value="CLOSE">CLOSE</option>
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
<script type="text/javascript">
  
  $(document).ready( function () {
      $('#example').DataTable();
  } );
</script>

<?php $this->load->view('templates/footer'); ?>