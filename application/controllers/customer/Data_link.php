<?php 
class Data_link extends CI_Controller{
	
	public function index()
{
	
	$data['link'] = $this->rental_model->get_data('link')->result();
	$this->load->view('templates_customer/header');
	$this->load->view('customer/detail_artikel',$data);
	$this->load->view('templates_customer/footer');

}
	
	

}
?>