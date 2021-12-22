<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller{

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
	redirect('customer/produk2/id');
}
public function hapus_keranjang(){
	$this->cart->destroy();
	redirect('customer/produk2/id');
}

	

// class search extends CI_Controller{
// 	public function __construct(){
// 		parent::__construct();
// 		$this->load->model('search_model');
// 	}
// 	public function index()
// 	{
// 		$key = $this->input->post('key',true);
// 		$data['mobil'] = $this->search_model->set($key);
// 		$this->load->view('templates_customer/header');
// 		$this->load->view('customer/dashboard',$data);
// 		$this->load->view('templates_customer/footer');
// 		}


 
// public function tambah_keranjang($id)
// {
// 	$mb = $this->rental_model->find($id);

// 	$data = array(
// 		'id' 		=> $mb->id_mobil,
// 		'qty'		=> 1,
// 		'price'		=> $mb->harga,
// 		'name'		=> $mb->produk
// 	);
// 	$this->cart->insert($data);
// 	// $this->load->view('templates_customer/header');
// 	// $this->load->view('dashboard/tambah_keranjang');
// 	// $this->load->view('templates_customer/footer');
// 	redirect('customer/produk2');
// }
// public function hapus_keranjang(){
// 	$this->cart->destroy();
// 	redirect('customer/produk2');
// }


}


 ?>