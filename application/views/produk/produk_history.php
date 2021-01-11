<?php 
    $this->load->view('templates/header_belanja');
    $level = $this->session->userdata('level');
?>
<!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
			<p><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></p>
            <div class="col-lg-12" style="padding:30px;border:3px solid green;margin-top:-100px;min-height:300px;">
            <h3>Riwayat Belanja</h3><hr>
                <table width="100%">
                    <?php
                        $no=1;
                        foreach ($history as $u) {
                        $kode=$u->id_transaksi;
                        $query=$this->db->query("SELECT * FROM tbl_transaksi a,tbl_produk b WHERE a.id_produk=b.id_produk AND id_pembayaran='".$u->id_pembayaran."'")->result();
                    ?>
                    <tr>
                        <th>Nama Penerima</th>
                        <th width="25%">Alamat Pengiriman</th>
                        <!-- <th>Nomor Resi</th> -->
                        <th>Total Harga</th>
                        <!-- <th>Kurir</th> -->
                        <th>Status Pengiriman</th>
                        <th>Tgl Bayar</th>
                    </tr>
                    <tr>
                        <td><?=$u->nama_user?></td>
                        <td><?=$u->alamat_user?>, Prov. <?=$u->provinsi_user?>, Kota. <?=$u->kota_user?>, Kode Pos : <?=$u->kode_pos?>, Telp. <?=$u->telp_user?></td>
                        <!-- <td><?=$u->nomor_resi?></td> -->
                        <td>Rp. <?php echo number_format($u->total_pembayaran,0,",","."); ?></td>
                        <!-- <td><?php echo $u->kurir_pengiriman ?></td> -->
                        <td><?=$u->status_pembayaran?></td>
                        <td><?=$u->tgl_pembayaran?></td>
                     </tr>
                     <tr>
                        <th>Foto</th>
                        <th>Nama Barang</th>
                        <th colspan="5">Jumlah</th>
                    </tr>
                     <tr>
                        <?php
                            foreach($query as $y){
                        ?>
                        <td><img src="<?php echo base_url('uploads/');?><?=$y->foto_produk?>" width="100"></td>
                        <td><?=$y->nama_produk?></td>
                        <td colspan="5"><?=$y->qty_transaksi?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th colspan="7"><hr></th>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
<?php $this->load->view('templates/footer_belanja'); ?>
<script type="text/javascript">
		$(document).ready(function () {
            document.getElementById("banner").style.display = "none";
            document.getElementById("kategori").style.display = "none";
        });
	</script>