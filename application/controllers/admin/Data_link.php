<?php 
	class Data_link extends CI_Controller{
		
	public function index()
	{
		$data['link'] = $this->rental_model->get_data('link')->result();
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_link',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_link()
	{
		$data['artikel'] = $this->rental_model->get_data('artikel')->result();
		$data['link'] = $this->rental_model->get_data('link')->result(); 
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_link',$data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_link_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE){
			$this->tambah_link();
		}else{
			$link					= $this->input->post('link');

			$data = array(
				'link' 			=> $link,
			);
			$this->rental_model->insert_data($data,'link');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Link Berhasil Ditambahkan!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>');																		
			redirect('admin/data_link');
		}
	}
	public function update_link_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->input->post('id_link');
			$this->update_link($id);
			$id 						= $this->input->post('id_link');

			$link			= $this->input->post('link');
			}

			$data = array(
				'link' 			=> $link,	
			);
			 $where = array(
			 	'id_link' =>$id
			 );
			$this->rental_model->update_aksi('link',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data link Berhasil Diupdate!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>');																		
			redirect('admin/data_link');	 
		}
		public function _rules()
	{
		$this->form_validation->set_rules('link','Link','required');
		
	}
	public function delete_link ($id)
	{
		$where = array ('id_link' => $id);
		$this->rental_model->delete_data($where,'link');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Data link Berhasil Dihapus!.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		  </button>
		</div>');																		
		redirect('admin/data_link');
	}

	}

	

 ?>