<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Produk extends CI_Model
{
    public $table='tbl_produk';
    public $id_produk='id_produk';
	public $kategori_produk='kategori_produk';
    public $order='DESC';

    function __construct()
    {
        parent::__construct();
    }
	function get_all(){
        return $this->db->query('select * from tbl_produk where aktif!=1 order by id_produk DESC')->result();
    }
	function get_by_kategoriProduk($kategori){
        return $this->db->query('select * from tbl_produk where aktif!=1 AND kategori_produk="'.$kategori.'" order by id_produk DESC')->result();
    }
    function get_by_kategoriMobil($kategori){
        return $this->db->query('select * from tbl_produk where aktif!=1 AND kategori_mobil="'.$kategori.'" order by id_produk DESC')->result();
    }
    function get_by_namaProduk($nama){
        return $this->db->query('select * from tbl_produk where aktif!=1 AND nama_produk LIKE "%'.$nama.'%" order by id_produk DESC')->result();
    }
    function get_keranjang($id){
        return $this->db->query('select * from tbl_produk a, tbl_transaksi b where a.id_produk=b.id_produk AND b.aktif=0 AND b.id_user="'.$id.'" order by b.id_produk DESC')->result();
    }
    function get_total($id){
        return $this->db->query('select b.id_user, SUM(b.total_transaksi) as total from tbl_produk a, tbl_transaksi b where a.id_produk=b.id_produk AND b.aktif=0 AND b.id_user="'.$id.'" order by b.id_produk DESC')->row();
    }
    function get_by_kode($kode){
        $this->db->where($this->id_produk, $kode);
        return $this->db->get($this->table)->row();
    }
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    function update($kode, $data)
    {
        $this->db->where($this->id_produk, $kode);
        $this->db->update($this->table, $data);
    }
	function delete($id)
    {
        $this->db->where($this->id_produk, $id);
        $this->db->delete($this->table);
    }
}