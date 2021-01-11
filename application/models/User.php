<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model
{
    public $table='tbl_user';
    public $id_user='id_user';
    public $email='email_user';
    public $order='DESC';

    function __construct()
    {
        parent::__construct();
    }
	function get_all(){
		return $this->db->query('select * from tbl_user where aktif!=1 AND level_user!=1 order by id_user DESC')->result();
    }
    function get_by_kode($kode){
        $this->db->where($this->id_user, $kode);
        return $this->db->get($this->table)->row();
    }
    function get_by_email($email){
        $this->db->where($this->email, $email);
        return $this->db->get($this->table)->row();
    }
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    function update($kode, $data)
    {
        $this->db->where($this->id_user, $kode);
        $this->db->update($this->table, $data);
    }
	function delete($id)
    {
        $this->db->where($this->id_user, $id);
        $this->db->delete($this->table);
    }
    function cek_login($table,$where){      
        return $this->db->get_where($table,$where);
    }   
    function cek_email($email){      
        $this->db->where($this->email, $email);
		return $this->db->get($this->table);
    }   
}