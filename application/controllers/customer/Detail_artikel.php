<?php 
	class Artikel extends CI_Controller{
		
		// public function index()
		// {
		// 	$this->load->view('templates_customer2/header');
		// 	$this->load->view('customer/artikel');
		// 	$this->load->view('templates_customer2/footer');
		// }
		public function data_artikel($id)
		// {
			$data['link'] = $this->rental_model->get_data('link')->result();
			$data['artikel'] = $this->rental_model->ambil_id_artikel($id);
			$this->load->view('templates_customer/header');
			$this->load->view('customer/detail_artikel',$data);
			$this->load->view('templates_customer/footer');
		}
	} 
 ?>