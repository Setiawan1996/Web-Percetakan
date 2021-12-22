<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class search_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function set($key){
		$this->db->select('*');
		$this->db->like('produk',$key);
		$this->db->or_like('deskripsi',$key);
		return $this->db->get('mobil')->result();
	}
	}
 ?>