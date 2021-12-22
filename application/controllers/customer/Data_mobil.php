<?php 
class Data_mobil extends CI_Controller{
	
	public function index()
{
	$data['mobil'] = $this->rental_model->get_all(); 
	$this->load->view('templates_customer/header');
	$this->load->view('customer/data_mobil',$data);
	$this->load->view('templates_customer/footer');

}


// public function search()
// 	{
// 		$this->load->model('rental_model');
// 		$keyword = $this->input->get('keyword');
// 		$data = $this->rental_model->ambil_data($keyword);
// 		$data = array(
// 			'keyword'	=> $keyword,
// 			'data'		=> $data
// 		);
// 		$this->load->view('customer/dashboard',$data);
// 	}
public function detail_mobil($id)
{
	$data['detail'] = $this->rental_model->ambil_id_mobil($id);
	$this->load->view('templates_customer2/header');
	$this->load->view('customer/detail_mobil',$data);
	$this->load->view('templates_customer/footer');
}
// public function tambah_keranjang($id)
// {
// 	$mb = $this->rental_model->find($id);
// 	$data = array(
// 		'id'	=> $mb->id_mobil,
// 		'qty'	=> 1,
// 		'price'	=> $mb->harga,
// 		'name'	=> $mb->produk
// 	);
// 	$this->cart->insert($data);
// 	redirect('customer/dashboard');

}
// public function search()
// {
// 	$keyword = $this->input->post('keyword');
// 	$data = ['produk'] = $this->rental_model->get_keyword($keyword);
// 	$this->load->view('templates_customer/header');
// 	$this->load->view('customer/mobil',$data);
// 	$this->load->view('templates_customer/footer');

// }


 ?>
 