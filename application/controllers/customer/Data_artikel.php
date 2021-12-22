<?php 
class Data_artikel extends CI_Controller{
	
	public function index()
{
// $data['link'] = $this->rental_model->get_data('link')->result();
	$data['artikel'] = $this->rental_model->get_data('artikel')->result();
	$this->load->view('templates_customer/header');
	$this->load->view('customer/data_artikel',$data);
	$this->load->view('templates_customer/footer');

}
	
	public function detail_artikel($id)
{
	$data['artikel'] = $this->rental_model->get_data('artikel')->result();
	$data['link'] = $this->rental_model->get_data('link')->result();
	$data['detail'] = $detail;
	$this->load->view('templates_customer/header');
	$this->load->view('customer/data_artikel',$data);
	$this->load->view('templates_customer/footer');

}
// public function data_link()
// {
	
// 	$data['link'] = $this->rental_model->get_data('link')->result();
// 	$this->load->view('templates_customer/header');
// 	$this->load->view('customer/data_link',$data);
// 	$this->load->view('templates_customer/footer');

// }

}
?>