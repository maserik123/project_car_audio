<?php 
    $this->load->view('templates/header_belanja');
    $level = $this->session->userdata('level');
?>
<!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
			<p><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></p>
            <div class="col-lg-12" style="padding:30px;border:3px solid green;margin-top:-100px;">
            <h3>Checkout Pesanan</h3><hr>
            <form method="POST" action="<?=base_url("Transaksi_Ctrl/checkout_alamat")?>">
               <h4>Biodata Penerima : </h4><br>
               <div class="col-md-4">
                    <div class="form-group">
                        <label for="varchar">Nama <span class="text-danger"> *</span></label>
                        <input type="text" name="nama_user" class="form-control" value="<?=$user->nama_user?>" required>
                    </div>
                </div>
               <div class="col-md-4">
                    <div class="form-group">
                        <label for="varchar">Telp <span class="text-danger"> *</span></label>
                        <input type="number" class="form-control" name="telp_user" value="<?=$user->telp_user?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <!-- <label for="varchar">Provinsi <span class="text-danger"> *</span></label> -->
                            <input type="hidden" name="provinsi_user" class="form-control" value="Riau" readonly>
                        </div>
                    </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <!-- <label for="varchar">Kota <span class="text-danger"> *</span></label> -->
                            <input type="hidden" name="kota_user" class="form-control" value="Pekanbaru" readonly>
                        </div>
                    </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <label for="varchar">Kecamatan <span class="text-danger"> *</span></label><br>
                            <select name="kecamatan_user" id="kecamatan" class="form-control" onchange="cekOngkir()" required>
								<option value="">-- Pilih Kecamatan --</option>
								<option value="Bukit Raya">Bukit Raya</option>
								<option value="Lima Puluh">Lima Puluh</option>
								<option value="Marpoyan Damai">Marpoyan Damai</option>
								<option value="Payung Sekaki">Payung Sekaki</option>
								<option value="Pekanbaru Kota">Pekanbaru Kota</option>
								<option value="Rumbai">Rumbai</option>
								<option value="Rumbai Pesisir">Rumbai Pesisir</option>
								<option value="Sail">Sail</option>
								<option value="Senapelan">Senapelan</option>
								<option value="Sukajadi">Sukajadi</option>
								<option value="Tampan">Tampan</option>
								<option value="Tenayan Raya">Tenayan Raya</option>
							</select>
                        </div>
                    </div><br><br>
                <div class="col-md-8">
                        <div class="form-group">
                            <label for="varchar">Alamat Lengkap<span class="text-danger"> *</span></label>
                            <input type="text" name="alamat_user" class="form-control" value="<?=$user->alamat_user?>" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="varchar">Kode Pos<span class="text-danger"> *</span></label>
                            <input type="number" class="form-control" name="kode_pos" value="<?=$user->kode_pos?>" required>
                        </div>
                    </div>
                <hr>
                <!-- <h4>Kurir Pengiriman : </h4><br> -->
               
               <table cellpadding="5">
                    <tr style="font-size:17px;">
                        <!-- <th>Kurir Pengiriman</th> -->
                        <th>
							<!-- <select name="kurir_pengiriman" class="form-control" id="kurir" required> -->
								<!-- <option value="">---Pilih Kurir---</option>
								<option value="Go Send">Go Send</option> -->
							</select>
						</th>
                    </tr>
                    <tr style="font-size:17px;">
                        <th>Total Belanja</th>
                        <th>Rp. <?php echo number_format($total->total,0,",","."); ?></th>
                    </tr>
                    <tr style="font-size:17px;">
                        <th>Biaya Pengiriman</th>
                        <th>Rp. <input type="text" id="ongkir" readonly></th>
                    </tr>
                    <tr style="font-size:17px;">
                        <th>Total Pembayaran</th>
                        <th>Rp. <input type="text" id="bayar" name="totalBayar" readonly></th>
                    </tr>
                    <tr>
                        <th><span class="btn btn-lg btn-danger" OnClick="history.go(-1);">Kembali</span></th>
                        <th>
							<button type="submit" class="btn btn-lg btn-success" id="checkout">Selanjutnya</button>
						</th>
                    </tr>
               </table>
            </form>
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
        function cekOngkir(){
			var kecamatan = $("#kecamatan").val();
			console.log(kecamatan);
			if(kecamatan == "Bukit Raya"){
                $("#ongkir").val(10000);
                $("#bayar").val(10000 + <?=$total->total?>);
			}else if(kecamatan == "Lima Puluh"){
                $("#ongkir").val(12000);
                $("#bayar").val(12000 + <?=$total->total?>);
			}else if(kecamatan == "Marpoyan Damai"){
                $("#ongkir").val(13000);
                $("#bayar").val(13000 + <?=$total->total?>);
			}else if(kecamatan == "Payung Sekaki"){
                $("#ongkir").val(14000);
                $("#bayar").val(14000 + <?=$total->total?>);
			}else if(kecamatan == "Pekanbaru Kota"){
                $("#ongkir").val(8000);
                $("#bayar").val(8000 + <?=$total->total?>);
			}else if(kecamatan == "Rumbai"){
                $("#ongkir").val(20000);
                $("#bayar").val(20000 + <?=$total->total?>);
			}else if(kecamatan == "Rumbai Pesisir"){
                $("#ongkir").val(17000);
                $("#bayar").val(17000 + <?=$total->total?>);
			}else if(kecamatan == "Sail"){
                $("#ongkir").val(15000);
                $("#bayar").val(15000 + <?=$total->total?>);
			}else if(kecamatan == "Senapelan"){
                $("#ongkir").val(12000);
                $("#bayar").val(12000 + <?=$total->total?>);
			}else if(kecamatan == "Sukajadi"){
                $("#ongkir").val(10000);
                $("#bayar").val(10000 + <?=$total->total?>);
			}else if(kecamatan == "Tampan"){
                $("#ongkir").val(9000);
                $("#bayar").val(9000 + <?=$total->total?>);
			}else if(kecamatan == "Tenayan Raya"){
                $("#ongkir").val(12000);
                $("#bayar").val(12000 + <?=$total->total?>);
			}else{
                $("#ongkir").val(0);
                $("#bayar").val(0 + <?=$total->total?>);
			}
		}
</script>