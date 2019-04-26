<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menus'); ?>
<?php $this->load->view('templates/header_tittle'); ?>


<button type="button" class="btn btn-info btn-sm fa fa-filter" data-toggle="modal" data-target="#myModal"> Filter</button>

<br/>
<br/>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<td>ID INDIKATOR</td>
			<td rowspan="2">NAMA INDIKATOR</td>
			<td>INDIKATOR PENILAIAN</td>
			<td>SATUAN</td>
			<td width="8%">ACTION</td>
		</tr>
	</thead>
	<tbody>
		<?php
    if ($record == '')
    {
      echo "";
    }else
    {
      foreach ($record as $r) {
      ?>
      <tr>
        <td><?php echo $r['id']; ?></td>
        <td><?php echo $r['indikator']; ?></td>
        <td><?php echo $r['nama_penilaian']; ?></td>
        <td><?php echo $r['satuan']; ?></td>
        <td>
          <a href="#" class="btn btn-xs fa fa-edit"> </a>
          <a href="#" class="btn btn-xs fa fa-trash"></a>
        </td>
      </tr>
      <?php
    }     
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
        <h4 class="modal-title">Filter data</h4>
      </div>
      <div class="modal-body">
      	<form method="get" action="<?php echo base_url('master/categoriMenu'); ?>">
        <div class="form">
        	<div class="fom-group">
        		<label>Role Menu</label>
        		<select name="role_menu" class="form-control">
        			<?php
        			foreach ($menu as $m) {
        				?>
        					<option value="<?php echo $m['role_name']; ?>"><?php echo $m['role_name']; ?></option>
        				<?php
        			}
        			?>
        		</select>
        	</div>
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

<?php $this->load->view('templates/footer'); ?>