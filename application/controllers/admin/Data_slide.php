<?php 

class data_slide extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') !='1'){
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
		$data['slide'] = $this->rental_model->get_data('slide')->result();
		// $data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_slide',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_slide()
	{
		$data['slide'] = $this->rental_model->get_data('slide')->result(); 
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_slide',$data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_slide_aksi()
	{
			$gambar	= $_FILES['gambar']['name'];
			if($gambar = ''){}else{
				$config['upload_path']   	= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('gambar')){
					echo "Gambar gagal upload!";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			}

			$data = array(
				
				'gambar' 				=> $gambar
			);
			$this->rental_model->insert_data($data,'slide');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data slide Berhasil Ditambahkan!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>');																		
			redirect('admin/data_slide');
		}
	


	public function update_slide($id){
		$where = array('id_slide' => $id);
		// $data['slide'] = $this->db->query("SELECT * FROM slide ar,  AND ar.id_slide='$id'")->result();
		$data['slide'] = $this->rental_model->get_data('slide')->result();
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_slide',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_slide_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->input->post('id_slide');
			$this->update_slide($id);
			$id 					= $this->input->post('id_slide');
			 
			$gambar					= $_FILES['gambar']['name'];
			if($gambar){
				$config['upload_path']   	= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload',$config);

				if ($this->upload->do_upload('gambar')){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				}else{
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				// 'kode_type' 			=> $kode_type,
				// 'produk' 				=> $produk,
				// 'satuan' 				=> $satuan,
				// 'deskripsi' 			=> $deskripsi,
				// 'harga' 				=> $harga,
				
			);
			 $where = array(
			 	'id_slide' =>$id
			 );
			$this->rental_model->update_data('slide',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data slide Berhasil Diupdate!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>');																		
			redirect('admin/data_slide');	 
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_type','Kode Type','required');
		$this->form_validation->set_rules('produk','Produk','required');
		$this->form_validation->set_rules('satuan','Satuan','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('harga','Harga','required');

	}

	
	public function delete_slide ($id)
	{
		$where = array ('id_slide' => $id);
		$this->rental_model->delete_data($where,'slide');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Data slide Berhasil Dihapus!.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		  </button>
		</div>');																		
		redirect('admin/data_slide');
	}

	

}

 ?>