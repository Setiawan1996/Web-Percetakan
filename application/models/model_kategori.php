<?php 
	class model_kategori extends CI_Model{

		public function data_kemasan($start,$limit){
			$array = array('kode_type =' => 'kemasan');
			$this->db->where($array);
			return $this->db->get("mobil",$limit,$start);
		}
		public function count_kemasan()
		{
			$array = array('kode_type =' => 'kemasan');
			$this->db->where($array);
			return $this->db->get("mobil")->num_rows();
		}

		public function data_buku($start,$limit){
			$array = array('kode_type =' => 'buku');
			$this->db->where($array);
			return $this->db->get("mobil",$limit,$start);
		}
		public function count_buku()
		{
			$array = array('kode_type =' => 'buku');
			$this->db->where($array);
			return $this->db->get("mobil")->num_rows();
		}



		// public function data_buku(){
		// 	return $this->db->get_where("mobil",array('kode_type' => 'buku'));
		// }
		public function data_kantor($start,$limit){
			$array = array('kode_type =' => 'kantor');
			$this->db->where($array);
			return $this->db->get("mobil",$limit,$start);
		}
		public function count_kantor()
		{
			$array = array('kode_type =' => 'kantor');
			$this->db->where($array);
			return $this->db->get("mobil")->num_rows();
		}

		public function data_promosi($start,$limit){
			$array = array('kode_type =' => 'promosi');
			$this->db->where($array);
			return $this->db->get("mobil",$limit,$start);
		}
		public function count_promosi()
		{
			$array = array('kode_type =' => 'promosi');
			$this->db->where($array);
			return $this->db->get("mobil")->num_rows();
		}

		public function data_souvenir($start,$limit){
			$array = array('kode_type =' => 'souvenir');
			$this->db->where($array);
			return $this->db->get("mobil",$limit,$start);
		}
		public function count_souvenir()
		{
			$array = array('kode_type =' => 'souvenir');
			$this->db->where($array);
			return $this->db->get("mobil")->num_rows();
		}

		public function data_banner($start,$limit){
			$array = array('kode_type =' => 'banner');
			$this->db->where($array);
			return $this->db->get("mobil",$limit,$start);
		}
		public function count_banner()
		{
			$array = array('kode_type =' => 'banner');
			$this->db->where($array);
			return $this->db->get("mobil")->num_rows();
		}

		public function data_textile($start,$limit){
			$array = array('kode_type =' => 'textile');
			$this->db->where($array);
			return $this->db->get("mobil",$limit,$start);
		}
		public function count_textile()
		{
			$array = array('kode_type =' => 'textile');
			$this->db->where($array);
			return $this->db->get("mobil")->num_rows();
		}
	}
 ?>