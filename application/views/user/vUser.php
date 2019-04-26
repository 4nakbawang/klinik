<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>

<div class="page-header">
  <h1>Daftar User</h1>
</div>

<?php echo $this->session->flashdata('message'); ?>
<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
<br/>
<br/>

<table class="table table-bordered" id="example">
  <thead>
  	<tr>
  		<th>NO</th>
  		<th>NAME</th>
      <th>USERNAME</th>
      <th>ROLE</th>
      <th>RUANGAN</th>
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
          <td><?php echo $r['name']; ?></td>
  				<td><?php echo $r['username']; ?></td>
          <td><?php echo $r['role_menu']; ?></td>
  				<td><?php echo $r['nr']; ?></td>
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


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data User</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('master/addUser');?>">
        	<div class="form">
        		<div class="form-group">
        			<label>Nama User</label>
        			<input type="text" name="name" class="form-control">
        		</div>
        		<div class="form-group">
        			<label>Username</label>
        			<input type="text" name="username" class="form-control">
        		</div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
              <label>Role</label>
              <select name="role_menu" class="form-control">
                <option value="ADMIN">ADMIN</option>
                <?php
                foreach ($role as $ro) {
                  ?>
                    <option value="<?php echo $ro['role_name']; ?>"><?php echo $ro['role_name']; ?></option>
                  <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Ruangan</label>
              <select name="ruangan" class="form-control">
                <option value="-">-Silahkan Pilih-</option>
                <?php
                foreach ($ruangan as $r) {
                  ?>
                    <option value="<?php echo $r['id']; ?>"><?php echo $r['nama_ruangan']; ?></option>
                  <?php
                }
                ?>
              </select>
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
  
  $(document).ready( function () {
      $('#example').DataTable();
  } );
</script>
<?php $this->load->view('templates/footer'); ?>

