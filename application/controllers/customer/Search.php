<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');


	public function index()
	{
		$key = $this->input->post('key',true);
		$data['mobil'] = $this->search_model->set($key);
		$this->load->view('templates_customer/header');
		$this->load->view('customer/search',$data);
		$this->load->view('templates_customer/footer');
		}

}
 ?>