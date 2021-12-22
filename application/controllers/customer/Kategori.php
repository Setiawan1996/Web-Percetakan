<?php 
	class Kategori extends CI_Controller{
		public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') !='2'){
			$this->session->flashdata('pesan','<div class="alert alert-success alert-dismissible 	 fade show" role="alert">
				  Anda Belum Login.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
				 </button>
				</div>');
			redirect('auth/login');
		}
	}
		public function kemasan()
		{
			$data['kemasan'] = $this->model_kategori->data_kemasan()->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/kemasan',$data);
			$this->load->view('templates_customer/footer');

		}
		public function buku()
		{
			$data['buku'] = $this->model_kategori->data_buku()->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/buku',$data);
			$this->load->view('templates_customer/footer');

		}
		 public function souvenir()
		{
			$data['souvenir'] = $this->model_kategori->data_souvenir()->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/souvenir',$data);
			$this->load->view('templates_customer/footer');

		}
		public function kantor()
		{
			$data['kantor'] = $this->model_kategori->data_kantor()->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/kantor',$data);
			$this->load->view('templates_customer/footer');

		}
		public function promosi()
		{
			$data['promosi'] = $this->model_kategori->data_promosi()->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/promosi',$data);
			$this->load->view('templates_customer/footer');

		}
		public function banner()
		{
			$data['banner'] = $this->model_kategori->data_banner()->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/banner',$data);
			$this->load->view('templates_customer/footer');

		}
		public function textile()
		{
			$data['textile'] = $this->model_kategori->data_textile()->result();
			$this->load->view('templates_customer/header');
			$this->load->view('customer/textile',$data);
			$this->load->view('templates_customer/footer');

		}
		public function tambah_keranjang($id)
{
	$mb = $this->rental_model->find($id);

	$data = array(
		'id' 		=> $mb->id_mobil,
		'qty'		=> 1,	
		'price'		=> $mb->harga,
		'name'		=> $mb->produk
	);
	$this->cart->insert($data);
	// $this->load->view('templates_customer/header');
	// $this->load->view('dashboard/tambah_keranjang');
	// $this->load->view('templates_customer/footer');
	redirect('welcome');
}
public function hapus_keranjang(){
	$this->cart->destroy();
	redirect('welcome');
}
	}

 ?>