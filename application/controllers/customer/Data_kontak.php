<?php 
class Data_kontak extends CI_Controller{
	
	public function index()
{
	$data['kontak'] = $this->rental_model->get_all(); 
	$this->load->view('templates_customer/header');
	$this->load->view('customer/dashboard',$data);
	$this->load->view('templates_customer/footer');

}



}


 ?>
 