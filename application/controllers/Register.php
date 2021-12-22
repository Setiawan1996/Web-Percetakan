<?php 

class Register extends CI_Controller{

	public function index()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE){
		$this->load->view('templates_admin/header2');
		$this->load->view('register_form');
		// $this->load->view('templates_admin/footer');
		}else{
				$nama 							= $this->input->post('nama');
				// $gambar							= $_FILES['gambar']['name'];
				$username 						= $this->input->post('username');
				$alamat 						= $this->input->post('alamat');
				// $jenis_kelamin 					= $this->input->post('jenis_kelamin');
				$no_telepon 					= $this->input->post('no_telepon');
				// $no_ktp 						= $this->input->post('no_ktp');
				$password 						= md5($this->input->post('password'));
				$role_id						= '2';
				// if($gambar = ''){}else{
				// $config['upload_path']   	= './assets/data';
				// $config['allowed_types']	= 'jpg|jpeg|png|tiff';

				// $this->load->library('upload',$config);
				// if (!$this->upload->do_upload('gambar')){
				// 	echo "Gambar gagal upload!";
				// }else{
				// 	$gambar=$this->upload->data('file_name');
				
					$data = array(
						'nama'				=>$nama,
						// 'gambar'			=>$gambar,
						'username' 			=>$username,
						'alamat'			=>$alamat,
						// 'jenis_kelamin'		=>$jenis_kelamin,
						'no_telepon'		=>$no_telepon,
						// 'no_ktp'			=>$no_ktp,
						'password'			=>$password,
						'role_id'			=>$role_id
			);
					$this->rental_model->insert_data($data,'customer');
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  		Register Berhasil Silahkan Login!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
				</div>');																		
				redirect('auth/login');
		}
		
	}
	public function _rules()
			{
				$this->form_validation->set_rules('nama','Nama','required');
				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('alamat','Alamat','required');
				// $this->form_validation->set_rules('jenis_kelamin','Jenis kelamin','required');
				$this->form_validation->set_rules('no_telepon','No.Telepon','required');
				// $this->form_validation->set_rules('no_ktp','No.KTP','required');
				$this->form_validation->set_rules('password','Password','required');
			}	
}



 ?>