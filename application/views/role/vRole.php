<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>

<h3>Data Role</h3>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Role</button>
<br/>
<br/>

<table class="table table-bordered">
	<tr>
		<th>NO</th>
		<th>ROLE NAME</th>		
		<th>ACTION</th>
	</tr>
	<?php
	$no=1;
	foreach ($record as $r) {
		?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $r['role_name']; ?></td>				
				<td>
					<a href="#"> Edit</a>
					<a href="#"> Delete</a>
				</td>
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
        <h4 class="modal-title">Tambah Data Role</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('master/addRole');?>">
        	<div class="form">
        		<div class="form-group">
        			<label>Nama Role</label>
        			<input type="text" name="role_name" class="form-control">
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
<?php $this->load->view('templates/footer'); ?>

