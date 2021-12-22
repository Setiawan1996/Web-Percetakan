<?php 

class data_mobil extends CI_Controller{

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
		$data['mobil'] = $this->rental_model->get_data('mobil')->result();
		$data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_mobil',$data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_mobil()
	{
		$data['type'] = $this->rental_model->get_data('type')->result(); 
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_mobil',$data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_mobil_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE){
			$this->tambah_mobil();
		}else{
			$kode_type				= $this->input->post('kode_type');
			$produk					= $this->input->post('produk');
			$satuan					= $this->input->post('satuan');
			$keterangan				= $this->input->post('keterangan');
			$harga		 			= $this->input->post('harga');	
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
				'kode_type' 			=> $kode_type,
				'produk' 				=> $produk,
				'satuan' 				=> $satuan,
				'keterangan' 			=> $keterangan,
				'harga' 				=> $harga,
				'gambar' 				=> $gambar
			);
			$this->rental_model->insert_data($data,'mobil');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Mobil Berhasil Ditambahkan!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>');																		
			redirect('admin/data_mobil');
		}
	}

	public function update_mobil($id){
		$where = array('id_mobil' => $id);
		$data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type= tp.kode_type AND mb.id_mobil='$id'")->result();
		$data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_mobil',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_mobil_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->input->post('id_mobil');
			$this->update_mobil($id);
			$id 					= $this->input->post('id_mobil');

			$kode_type				= $this->input->post('kode_type');
			$produk					= $this->input->post('produk');
			$satuan					= $this->input->post('satuan');
			$keterangan				= $this->input->post('keterangan');
			
			$harga		 			= $this->input->post('harga');
			 
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
				'kode_type' 			=> $kode_type,
				'produk' 				=> $produk,
				'satuan' 				=> $satuan,
				'keterangan' 			=> $keterangan,
				'harga' 				=> $harga
				
			);
			 $where = array(
			 	'id_mobil' =>$id
			 );
			$this->rental_model->update_data('mobil',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Mobil Berhasil Diupdate!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>');																		
			redirect('admin/data_mobil');	 
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_type','Kode Type','required');
		$this->form_validation->set_rules('produk','Produk','required');
		$this->form_validation->set_rules('satuan','Satuan','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		$this->form_validation->set_rules('harga','Harga','required');

	}

	public function detail_mobil($id)
	{
		$data['detail'] = $this->rental_model->ambil_id_mobil($id);
		$this->load->view('templates_admin/header3');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_mobil',$data);
		$this->load->view('templates_admin/footer');	
	}
	public function delete_mobil ($id)
	{
		$where = array ('id_mobil' => $id);
		$this->rental_model->delete_data($where,'mobil');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Data Mobil Berhasil Dihapus!.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		  </button>
		</div>');																		
		redirect('admin/data_mobil');
	}
	
}


 ?>