<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Keranjang_model extends Ci_Model{
			 public function find($id)
	{
		$result = $this->db->where('id_mobil',$id)
							->limit(1)
							->get('produk');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	}
 ?>