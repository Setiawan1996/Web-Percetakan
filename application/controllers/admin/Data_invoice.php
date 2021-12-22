<?php 
	class Data_invoice extends CI_controller{
		public function index()
		{
			$data['invoice'] = $this->model_invoice->tampil_data();
			$this->load->view('templates_admin/header3');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_invoice',$data);
			$this->load->view('templates_admin/footer');
		}

		public function detail_invoice($id_invoice)
		{
			$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
			$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);	
			$this->load->view('templates_admin/header3');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/detail_invoice',$data);
			$this->load->view('templates_admin/footer');
		}
		public function delete_invoice ($id)
	{
		$where = array ('id_invoice' => $id);
		$this->rental_model->delete_data($where,'invoice');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Data invoice Berhasil Dihapus!.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		  </button>
		</div>');																		
		redirect('admin/data_invoice');
	}
	public function _rules()
		{
			$this->form_validation->set_rules('nama_lengkap','nama_lengkap','required');
			$this->form_validation->set_rules('alamat_lengkap','alamat_lengkap','required');

			
			$this->form_validation->set_rules('no_telepon','no_telepon','required');

			
			
		}
	}
 ?>