<?php 
	class Detail_keranjang extends CI_Controller{
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
		public function index()
		{
			$data['bank'] = $this->rental_model->get_data('bank')->result();
			$this->load->view('templates_customer2/header');
			$this->load->view('customer/detail_keranjang',$data);
			$this->load->view('templates_customer2/footer');
		}
		
	} 
 ?>