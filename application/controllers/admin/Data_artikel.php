<?php 

class data_artikel extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') !='1'){
			$this->session->flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
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
		$data['artikel'] = $this->rental_model->get_data('artikel')->result();
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_artikel',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_artikel()
	{
		$data['artikel'] = $this->rental_model->get_data('artikel')->result(); 
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_artikel',$data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_artikel_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE){
			$this->tambah_artikel();
		}else{
			$judul_artikel					= $this->input->post('judul_artikel');
			$keterangan						= $this->input->post('keterangan');
			$keterangan_lengkap				= $this->input->post('keterangan_lengkap');
			$keterangan_lengkap_2				= $this->input->post('keterangan_lengkap_2');
			$keterangan_lengkap_3				= $this->input->post('keterangan_lengkap_3');
			$keterangan_lengkap_4				= $this->input->post('keterangan_lengkap_4');
			$tanggal_update		 			= $this->input->post('tanggal_update');	
			$gambar					= $_FILES['gambar']['name'];
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
				'judul_artikel' 			=> $judul_artikel,
				'keterangan' 				=> $keterangan,
				'keterangan_lengkap' 		=> $keterangan_lengkap,
				'keterangan_lengkap_2' 		=> $keterangan_lengkap_2,
				'keterangan_lengkap_3' 		=> $keterangan_lengkap_3,
				'keterangan_lengkap_4' 		=> $keterangan_lengkap_4,
				'tanggal_update' 			=> $tanggal_update,
				'gambar' 					=> $gambar
			);
			$this->rental_model->insert_data($data,'artikel');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Artikel Berhasil Ditambahkan!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>');																		
			redirect('admin/data_artikel');
		}
	}

	public function ambil_id_artikel($id){
		// return $this->db->get_where($data,$where); 	 	
		$where = array('id_artikel' =>$id);
		// $data['artikel'] = $this->rental_model->get_data('artikel')->result();
		$data ['artikel'] = $this->db->query("SELECT * FROM artikel WHERE id_artikel='$id'")->result();
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_artikel',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_artikel_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->input->post('id_artikel');
			$this->update_artikel($id);
			$id 						= $this->input->post('id_artikel');

			$judul_artikel					= $this->input->post('judul_artikel');
			$keterangan						= $this->input->post('keterangan');
			$tanggal_update 				= $this->input->post('tanggal_update');
			$keterangan_lengkap				= $this->input->post('keterangan_lengkap');
			$keterangan_lengkap_2			= $this->input->post('keterangan_lengkap_2');
			$keterangan_lengkap_3			= $this->input->post('keterangan_lengkap_3');
			$keterangan_lengkap_4			= $this->input->post('keterangan_lengkap_4');
			 
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
				'judul_artikel' 			=> $judul_artikel,
				'keterangan' 				=> $keterangan,
				'keterangan_lengkap' 		=> $keterangan_lengkap,
				'keterangan_lengkap_2' 		=> $keterangan_lengkap_2,
				'keterangan_lengkap_3' 		=> $keterangan_lengkap_3,
				'keterangan_lengkap_4' 		=> $keterangan_lengkap_4,
				'tanggal_update' 			=> $tanggal_update,
				
			);
			 $where = array(
			 	'id_artikel' =>$id
			 );
			$this->rental_model->update_aksi('artikel',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Artikel Berhasil Diupdate!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>');																		
			redirect('admin/data_artikel');	 
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('judul_artikel','Judul_artikel','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		$this->form_validation->set_rules('keterangan_lengkap','Keterangan_Lengkap','required');
		$this->form_validation->set_rules('keterangan_lengkap_2','Keterangan_Lengkap_2','required');
		$this->form_validation->set_rules('keterangan_lengkap_3','Keterangan_Lengkap_3','required');
		$this->form_validation->set_rules('keterangan_lengkap_4','Keterangan_Lengkap_4','required');
		$this->form_validation->set_rules('tanggal_update','Tanggal_Update','required');
		

	}

	public function detail_artikel($id)
	{
		$this->load->model('rental_model');
		// $detail = $this->rental_model->detail_data($id);
		$data['detail'] = $this->rental_model->ambil_id_artikel($id);
		// $data['detail'] = $detail;
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_artikel',$data);
		$this->load->view('templates_admin/footer');	
	}
	public function delete_artikel ($id)
	{
		$where = array ('id_artikel' => $id);
		$this->rental_model->delete_data($where,'artikel');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Data Artikel Berhasil Dihapus!.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		  </button>
		</div>');																		
		redirect('admin/data_artikel');
	}
	
}


 ?>