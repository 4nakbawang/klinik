<table class="table table-bordered">
    <tr class="success">
        <th></th>
        <th>NO</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>qty</th>
        <th>Total</th>
    </tr>
    <?php 
		$no =1;
		foreach ($det_barang as $d) {
		?>
        <tr>
            <td style="width: 5%;">
                 <button iddata="<?php echo $d['id']; ?>" class="btn btn-sm btn-danger fa fa-trash delete-barang"  >
                </button>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $d['nama_barang']; ?>
            </td>
            <td>
                <?php echo $d['satuan_besar']; ?>
            </td>
            <td>
                <?php echo number_format($d['harga']); ?>
            </td>
            <td>
                <?php echo $d['qty']; ?>
            </td>
            <td>
                <?php echo number_format($d['total']); ?>
            </td>
        </tr>
        <?php
			$no++;
				}

		?>
            <tr>
                <td colspan="6" align="right">Total</td>
                <td> <b>Rp. <?php echo number_format($tagihan_barang['total']); ?> </b></td>
            </tr>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('.delete-barang').click(function(){
            var id = $(this).attr('iddata');

            $.ajax({
                type: "POST",
                url: "<?php base_url(); ?>/klinik/rincian/delete_barang",
                data: {id:id},
                dataType: "json",
                success: function(response){
                      location.reload();
                    }

            });
        });
       
    });
</script>