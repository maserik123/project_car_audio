<?php
$this->load->view('templates/header_belanja');
$level = $this->session->userdata('level');
?>
<script>
    function detailProduk(id) {
        save_method = 'update';
        $('#modalDetail').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
        $('.form-group').removeClass('has-error')
            .removeClass('has-success')
            .find('#text-error').remove();
        $.ajax({
            url: "<?php echo site_url('Main_Ctrl/getProdukById/'); ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(resp) {
                data = resp.data
                $('[id="id_produk"]').html(data.id_produk);
                console.log(data.id_produk);

                var foto_produk = new Image(400, 400);
                foto_produk.src = '<?php echo base_url() ?>uploads/' + data.foto_produk + '';
                x = document.getElementById("foto_produk");
                x.appendChild(foto_produk);

                var angka = data.harga_jual;
                var reverse = angka.toString().split('').reverse().join(''),
                    ribuan = reverse.match(/\d{1,3}/g);
                ribuan = ribuan.join('.').split('').reverse().join('');

                $('[id="nama_produk"]').html(data.nama_produk);
                $('[id="harga_jual"]').html(ribuan);
                $('[id="stok_produk"]').html(data.stok_produk);
                $('[id="deskripsi_produk"]').html(data.deskripsi_produk);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From Ajax');
            }
        });

    }
</script>
<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <p><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></p>
            <div class="col-lg-12" style="padding:30px;margin-top:-100px;">
                <h4>Detail Produk</h4>

                <hr>
                <table style="width: 100%;">

                    <tbody>
                        <?php foreach ($getProdukById as $row) { ?>
                            <tr>
                                <small class="badge">Klik Gambar Untuk Memperbesar >></small><br><br>
                                <td>
                                    <a onclick="detailProduk(<?php echo $row->id_produk; ?>)" href="#"><img src="<?php echo base_url() ?>/uploads/<?php echo $row->foto_produk; ?>" alt="" srcset="" width="50px" height="50px"></a>
                                    <a onclick="detailProduk(<?php echo $row->id_produk; ?>)" href="#"><img src="<?php echo base_url() ?>/uploads/<?php echo $row->foto_produk; ?>" alt="" srcset="" width="50px" height="50px"></a>
                                    <a onclick="detailProduk(<?php echo $row->id_produk; ?>)" href="#"><img src="<?php echo base_url() ?>/uploads/<?php echo $row->foto_produk; ?>" alt="" srcset="" width="50px" height="50px"></a>
                                    <a onclick="detailProduk(<?php echo $row->id_produk; ?>)" href="#"><img src="<?php echo base_url() ?>/uploads/<?php echo $row->foto_produk; ?>" alt="" srcset="" width="50px" height="50px"></a>
                                    <a onclick="detailProduk(<?php echo $row->id_produk; ?>)" href="#"><img src="<?php echo base_url() ?>/uploads/<?php echo $row->foto_produk; ?>" alt="" srcset="" width="50px" height="50px"></a>
                                    <a onclick="detailProduk(<?php echo $row->id_produk; ?>)" href="#"><img src="<?php echo base_url() ?>/uploads/<?php echo $row->foto_produk; ?>" alt="" srcset="" width="50px" height="50px"></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="modalDetail" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title"> <span class="fa fa-search"></span> Detail Produk</h4>
                <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload()">&times;</button>
            </div>
            <div class="modal-body scroll">
                <div class="row">

                    <div class="col-md-12">

                        <!-- Nama Produk -->
                        <div class="row">
                            <strong id="foto_produk"></strong>
                        </div>
                        <!-- <div class="zoomeffect" style="height: 200px;width: 200px;">
							<div id="foto_produk" style="text-align: right;"></div>
						</div> -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.location.reload()">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- Featured Section End -->
<?php $this->load->view('templates/footer_belanja'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        document.getElementById("banner").style.display = "none";
        document.getElementById("kategori").style.display = "none";
    });
</script>