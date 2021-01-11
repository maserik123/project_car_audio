<?php 
    $this->load->view('templates/header_belanja');
    $level = $this->session->userdata('level');
?>
<!-- Featured Section Begin -->
<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
/* -- quantity box -- */

.quantity {
 display: inline-block; }

.quantity .input-text.qty {
 width: 35px;
 height: 39px;
 padding: 0 5px;
 text-align: center;
 background-color: transparent;
 border: 1px solid #efefef;
}

.quantity.buttons_added {
 text-align: left;
 position: relative;
 white-space: nowrap;
 vertical-align: top; }

.quantity.buttons_added input {
 display: inline-block;
 margin: 0;
 vertical-align: top;
 box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
 padding: 7px 10px 8px;
 height: 41px;
 background-color: #ffffff;
 border: 1px solid #efefef;
 cursor:pointer;}

.quantity.buttons_added .minus {
 border-right: 0; }

.quantity.buttons_added .plus {
 border-left: 0; }

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
 background: #eeeeee; }

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
 -webkit-appearance: none;
 -moz-appearance: none;
 margin: 0; }
 
 .quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
 outline: none; }
</style>
	<section class="featured spad">
        <div class="container">
            <div class="row">
			<p><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></p>
				<?php
                    $no=1;
                    foreach ($produk as $u) {
                    $kode=$u->id_produk;
                ?>
                <div class="col-lg-3" style="padding:10px;">
					<img src="<?php echo base_url('uploads/');?><?=$u->foto_produk?>" style="width:100%;height:200px;">
					<hr>

					<b><?php echo $u->nama_produk ?></b><br>
					Rp. <?php echo number_format($u->harga_jual,0,",","."); ?><br>
					Tersisa : <?php echo $u->stok_produk ?> <br><br>
					<form method="POST" action="<?php echo base_url('Transaksi_Ctrl/addBelanja'); ?>">
						<input type="hidden" name="id_produk" value="<?=$kode?>">
						<input type="hidden" name="harga_produk" value="<?=$u->harga_jual?>">
						<!-- <select name="qty_transaksi" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>&nbsp;&nbsp;&nbsp; -->
						<div class="quantity buttons_added">
							<input type="button" value="-" class="minus">
							<input type="number" step="1" min="1" max="" name="qty_transaksi" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
							<input type="button" value="+" class="plus">
						</div>
						<input type="submit" class="btn btn-success btn-md" value="Beli"> 
					</form>
                </div>
				<?php } ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
<?php $this->load->view('templates/footer_belanja'); ?>
<script>
function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});
</script>