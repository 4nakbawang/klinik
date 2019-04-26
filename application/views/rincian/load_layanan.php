<table class="table table-bordered">
    <tr class="success">
        <th></th>
        <th>NO</th>
        <th>Layanan</th>
        <th>Harga</th>
        <th>qty</th>
        <th>Total</th>
    </tr>
    <?php 
		$no =1;
		foreach ($det_layanan as $d) {
		?>
        <tr>
            <td style="width: 5%;">
                <button iddata="<?php echo $d['id']; ?>" class="btn btn-sm btn-danger fa fa-trash delete-layanan"  >
                </button>
            </td>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $d['nama_layanan']; ?>
            </td>
            <td>
                <?php echo number_format($d['harga']); ?>
            </td>
            <td>
                <?php echo $d['qty']; ?>
            </td>
            <td>
                <?php echo number_format(($d['qty'] * $d['harga'])); ?>
            </td>
        </tr>
        <?php
			$no++;
				}

		?>
            <tr>
                <td colspan="5" align="right">Total</td>
                <td> <b>Rp. <?php echo number_format($tagihan['total']); ?> </b></td>
            </tr>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('.delete-layanan').click(function(){
            var id = $(this).attr('iddata');

            $.ajax({
                type: "POST",
                url: "<?php base_url(); ?>/klinik/rincian/delete_layanan",
                data: {id:id},
                dataType: "json",
                success: function(response){
                      location.reload();
                    }

            });
        });
       
    });
</script>