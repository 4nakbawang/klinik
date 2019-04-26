<style media="print">
    body {
        margin: 0;
    }
</style>

<style>
    body {
        margin: 0;
        overflow: -moz-scrollbars-vertical;
    }
</style>

<table class="fix-button" width="100%" style="border:1px dashed #aaa;margin-bottom:20px;position:fixed;background:#ddd;" cellpadding="10">
    <tr>
        <td>
            <a href="" id="print" style="cursor:pointer;border-color: #82b440;background: #82b440;padding: 5px 10px;line-height: 18px;font-size: 12px;outline: none !important;font-weight: 400;border-radius: 3px;text-transform: uppercase;color:#fff;text-decoration:none;padding:10px;">CETAK HALAMAN</a>
            <button onclick="window.close();" style="cursor:pointer;border-color: #82b440;background: #82b440;padding: 5px 10px;line-height: 18px;font-size: 12px;outline: none !important;font-weight: 400;border-radius: 3px;text-transform: uppercase;color:#fff;float:right">TUTUP WINDOW</button>
        </td>
    </tr>
</table>

<table class="fix-button" width="100%" style="border:1px dashed #aaa;margin-bottom:20px;" cellpadding="10">
    <tr>
        <td>
            <button>CETAK</button>
            &nbsp;
        </td>
    </tr>
</table>



<table width="100%" style="border:1px solid #333;border-collapse:collapse;color:#333;">
    <tr>
        <td width="65%">
            <center>
                <div style="color:#333;line-height:24px;">
                    <span style="font-size: 12pt;font-weight:bold;">KLINIK ARDAMI</span> <br />
                    <span style="font-size: 10pt;">
                        Jl. Saparako - Majalaya  . Telp (022)-2955415               
                    </span>
                    
                </div>
            </center>
        </td>
    </tr>
</table>

<table width="100%" style="margin-top:2px;border:1px solid #333;border-collapse:collapse;color:#333;">
    <tr>
        <td width="50%" >
            <table cellpadding="1">
                <input type="text" name="" id="id_kunjungan" value="<?php echo $identitas['id']; ?>" hidden>
                <tr>
                    <td style="font-size: 10pt;">No. RM</td>
                    <td> &nbsp;&nbsp;&nbsp; : </td>
                    <td style="font-size: 10pt;"><?php echo $identitas['id_pasien']; ?></td>
                </tr>
                <tr>
                    <td style="font-size: 10pt;">Nama Pasien</td>
                    <td> &nbsp;&nbsp;&nbsp; : </td>
                    <td style="font-size: 10pt;"><?php echo $identitas['nama_pasien']; ?></td>
                </tr>
                <tr>
                    <td style="font-size: 10pt;">Alamat</td>
                    <td> &nbsp;&nbsp;&nbsp; : </td>
                    <td style="font-size: 10pt;"><?php echo $identitas['alamat']; ?></td>
                </tr>
                
            </table>
        </td>
        <td width="50%" >
            <table cellpadding="1">   

                <tr>
                    <td style="font-size: 10pt;">Tgl. Lahir</td>
                    <td> &nbsp;&nbsp;&nbsp; : </td>
                    <td style="font-size: 10pt;"></td>
                </tr>             
                <tr>
                    <td style="font-size: 10pt;">Jenis Pasien</td>
                    <td> &nbsp;&nbsp;&nbsp; : </td>
                    <td style="font-size: 10pt;"><?php echo $identitas['jenis_pasien']; ?></td>
                </tr>
                <tr>
                    <td style="font-size: 11pt;">Tgl. Kunjungan</td>
                    <td> &nbsp;&nbsp;&nbsp; : </td>
                    <td style="font-size: 10pt;"><?php echo $identitas['tanggal']; ?></td>
                </tr>
                
                
                
            </table>
        </td>
    </tr>
</table>

<div style="text-align:center;margin:7px 0;color:#333;">
    <span style="font-size:12pt;">PERINCIAN BIAYA PELAYANAN KESEHATAN PASIEN</span>
</div>

<table width="100%" style="border:1px solid #333;">
    <tr>
        <th>Nama Layanan</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Jumlah</th>
    </tr>
       
</table>
<table  width="100%" style="margin-left: 5px; " >
    <tr>
        <td><u><b>Layanan</b></u></td>
    </tr>
    <?php
    foreach ($det_layanan as $d) {
        ?>
        <tr style="margin-right: 10px;" width="100%">
            <td width="40%">
                <?php echo $d['nama_layanan']; ?>
            </td>
            <td width="10%">
                <?php echo number_format($d['harga']); ?>
            </td>
            <td >
                <?php echo $d['qty']; ?>
            </td>
            <td align="right">
                <?php echo number_format(($d['qty'] * $d['harga'])); ?>
            </td>
        </tr>
        <?php
    }
    ?>
    <tr>
        <td colspan="2" align="right"><b>Total</b></td>
        <td align="right" width="20%"> <b><?php echo number_format($tagihan_layanan['total']); ?></b></td>
    </tr>
    <tr>
        <td><u><b>Barang/Obat</b></u></td>
    </tr>
    <?php
    foreach ($det_barang as $d) {
        ?>
        <tr style="margin-right: 20px;">
            <td width="50%">
                <?php echo $d['nama_barang']; ?> (<?php echo $d['satuan_besar']; ?>)
            </td>
            <td width="18%">
                <?php echo number_format($d['harga']); ?>
            </td>
            <td >
                <?php echo $d['qty']; ?>
            </td>
            <td align="right">
                <?php echo number_format(($d['qty'] * $d['harga'])); ?>
            </td>
        </tr>
        <?php
    }
    ?>
    <tr>
        <td colspan="2" align="right"><b>Total</b></td>
        <td align="right" width="20%"> <b><?php echo number_format($tagihan_barang['total']); ?></b></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><b>Grand Total</b></td>
        <td align="right" width="20%"> <div id="load-total"></div></td>
    </tr>
</table>
<br/>
<br/>
<table width="100%">
    
    <tr align="center">
        <td>Pasien</td>
        <td>Hormat Kami,</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr align="center">
        <td>___________</td>
        <td>___________</td>
    </tr>
</table>
<script
          src="http://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var id_kunjungan = $('#id_kunjungan').val();
        
        $('#load-total').load("<?php echo base_url('rincian/load_total/'); ?>"+id_kunjungan);

         $('#print').click(function(){
        $('.fix-button').remove();
        window.print();
      });
    });
     

</script>
