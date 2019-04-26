<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>

<div class="page-header">
	<h1>Data Barang</h1>
</div>
	
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
      <th>Merk</th>
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
          <td><?php echo $r['merk']; ?></td>
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
        <h4 class="modal-title">Tambah Data Barang</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('master/addBarang');?>">
        	<div class="form">
        		<div class="form-group">
        			<label>Merk</label>
        			<input type="text" name="merk" class="form-control" required>
        		</div>
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" class="form-control" required>
            </div>
        		<div class="form-group">
        			<label>Satuan Besar</label>
        			<select class="form-control" name="satuan_besar">
        				<option>UNIT</option>
        				<option>PACK</option>
        				<option>DUS</option>
        				<option>PCS</option>
        			</select>
        		</div>
        		<div class="form-group">
        			<label>Satuan Kecil</label>
        			<select class="form-control" name="satuan_kecil">
        				<option>UNIT</option>
        				<option>PACK</option>
        				<option>DUS</option>
        				<option>PCS</option>
        			</select>
        		</div>
            <div class="form-group">
              <label>Harga Beli</label>
              <input type="text" name="harga_beli" class="form-control">
            </div>
             <div class="form-group">
              <label>Margin</label>
              <input type="text" name="margin" class="form-control" value="0">
            </div>
             <div class="form-group">
              <label>Harga Jual</label>
              <input type="text" name="harga_jual" class="form-control">
            </div>

        		<div class="form-group">
        			<label>Generic Status</label>
        			<select name="generik_status" class="form-control">
               <option value="GENERIC">GENERIC</option>
               <option value="NON GENERIC">NON GENERIC</option>
              </select>
        		</div>

             <div class="form-group">
              <label>Stok</label>
              <input type="text" name="stok" class="form-control">
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