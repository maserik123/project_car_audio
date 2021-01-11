<?php $this->load->view('templates/header');?>
<div class="card">
    <div class="header">
        <h4 class="title">Lihat Produk</h4>
        <?php echo anchor(site_url('Produk_Ctrl'), '< Kembali', 'class="btn btn-info btn-fill"'); ?>
        <p class="category"><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></p>
    </div>
    <div class="content">
    	<table id="mytable" class="table table-bordered table-hover table-striped">
    		<tr><th width="20%">Kode Produk</th><td><?php echo $kode_produk; ?></td></tr>
    		<tr><th>Nama Produk</th><td><?php echo $nama_produk; ?></td></tr>
    		<tr><th>Harga Beli</th><td>Rp. <?php echo number_format($harga_beli,0,",","."); ?></td></tr>
    		<tr><th>Harga Jual</th><td>Rp. <?php echo number_format($harga_jual,0,",","."); ?></td></tr>
    		<tr><th>Stok</th><td><?php echo $stok_produk; ?></td></tr>
    		<tr><th>Kat Produk</th><td><?php echo $kategori_produk; ?></td></tr>
    		<tr><th>Kat Mobil</th><td><?php echo $kategori_mobil; ?></td></tr>
            <tr><th>Foto</th><td><img src="<?php echo base_url('uploads/');?><?=$foto_produk?>" style="height: 200px;"></td></tr>
            <tr><th>ROP</th><td><?php echo $rop; ?></td></tr>
            <tr><th>EOQ</th><td><?php echo $eoq; ?></td></tr>
    	</table>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>