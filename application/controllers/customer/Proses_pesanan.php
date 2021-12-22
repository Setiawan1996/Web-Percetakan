<?php 	
		class Proses_pesanan extends CI_Controller{
			
			public function index()
			{
			$is_processed = $this->model_invoice->index();
			if($is_processed){
			$this->cart->destroy();	
			$this->load->view('templates_customer2/header');
			$this->load->view('customer/proses_pesanan');
			$this->load->view('templates_customer2/footer');	
			}else{
				echo "maaf pesanan anda gagal diproses";
		}
	}
}
 ?>