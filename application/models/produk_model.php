<?php 
	defined('BASEPATH')OR exit ('No direct script access allowed');
	
	class Produk_model extends CI_Model
	{
		
		public function get_product()
		{
		$this->db->limit(4);
		return $this->db->get('mobil');

		}
		
	}
 ?>