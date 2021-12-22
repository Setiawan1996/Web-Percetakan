<?php 
	class Kontak extends CI_Controller{
		
		public function index()
		{
			$this->load->view('templates_customer2/header');
			$this->load->view('customer/kontak');
			$this->load->view('templates_customer2/footer');
		}
	} 
 ?>