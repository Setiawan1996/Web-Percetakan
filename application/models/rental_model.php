<?php 

class rental_model extends CI_Model{

	public function get_data($table){
	
	return $this->db->get($table);
	}

	// public function get($limit)
	// {
	
	//  $query = $this->db->get('mobil',$limit);
	//  return $query;
	// }


	public function detail_artikel($id = NULL)
	{
		$query = $this->db->get_where('artikel', array('id_artikel' =>$id))->row();
		return $query;
	}

	public function update_artikel($where,$data)
	{
		$this->db->update($where,$data);
	}
	
	public function get_slider($where){
		$this->db->from('slide','slide_baru');
		$this->db->where($where);
		$query=$this->db->get();
		return $query;
	}
	
	
	public function get_where($where, $table){
		return $this->db->get_where($table,$where);
	}
	public function insert_data ($data,$table){
		$this->db->insert($table,$data);
	}
	public function update_data($table,$data,$where){
		$this->db->update($table,$data,$where);
	}
	public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);

	}
	
	public function ambil_id_mobil($id){
		$hasil = $this->db->where('id_mobil',$id)->get('mobil');
		if ($hasil->num_rows()> 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_customer($id){
		$hasil = $this->db->where('id_customer',$id)->get('customer');
		if ($hasil->num_rows()> 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function ambil_id_artikel($id){
		$hasil = $this->db->where('id_artikel',$id)->get('artikel');
		if ($hasil->num_rows()> 0){
			return $hasil->result();
		}else{
			return false;
		}
	}

	public function cek_login()
	{
		$username   = set_value('username');
		$password   = set_value('password');

		$result = $this->db
						->where('username', $username)
						->where('password',md5($password))
						->limit(1)
						->get('customer');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return FALSE;
		}
	}

	public function update_password($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function downloadPembayaran($id)
	{
		$query = $this->db->get_where('transaksi', array('id_rental' =>$id));
		return $query->row_array();
	}

	 public function find($id)
	{
		$result = $this->db->where('id_mobil',$id)
							->limit(1)
							->get('mobil');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	// public function get_keyword($keyword){
	// 	$this->db->select('*');
	// 	$this->db->from('mobil');
	// 	$this->db->like('produk',$keyword);
	// 	$this->db->or_like('deskripsi',$keyword);
	// 	$this->db->or_like('harga',$keyword);
	// 	$this->db->or_like('satuan',$keyword);
	// 	return $this->db->get()->result();

	// }
}


 ?>