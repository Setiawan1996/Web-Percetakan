<?php 	
class Data_bank extends CI_Controller
{
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
			$data['bank'] = $this->rental_model->get_data('bank')->result();
			$this->load->view('templates_admin/header3');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_bank',$data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_bank()
		{
			$data['bank'] = $this->rental_model->get_data('bank')->result();
			$this->load->view('templates_admin/header3');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_bank',$data);
			$this->load->view('templates_admin/footer');

		}
		public function tambah_bank_aksi()
		{
			$this->_rules();
			if ($this->form_validation->run() == FALSE){
				$this->tambah_bank();
			}else{
				$nama_bank			= $this->input->post('nama_bank');
				$nomor_rekening		= $this->input->post('nomor_rekening');

				$nama_bank2			= $this->input->post('nama_bank2');
				$nomor_rekening2		= $this->input->post('nomor_rekening2');

				$nama_bank3			= $this->input->post('nama_bank3');
				$nomor_rekening3		= $this->input->post('nomor_rekening3');

				$nama_bank4			= $this->input->post('nama_bank4');
				$nomor_rekening4		= $this->input->post('nomor_rekening4');

				$pemilik			= $this->input->post('pemilik');
				

				$data = array(
				'nama_bank'				=> $nama_bank,
				'nomor_rekening'		=> $nomor_rekening,

				'nama_bank2'				=> $nama_bank2,
				'nomor_rekening2'		=> $nomor_rekening2,

				'nama_bank3'				=> $nama_bank3,
				'nomor_rekening3'		=> $nomor_rekening3,

				'nama_bank4'				=> $nama_bank4,
				'nomor_rekening4'		=> $nomor_rekening4,

				'pemilik'				=> $pemilik,
				
				);
				$this->rental_model->insert_data($data,'bank');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible 	 fade show" role="alert">
					  Data Bank Berhasil Ditambahkan!.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
					</div>');																		
					redirect('admin/data_bank');
			}
		}
		public function update_bank($id){
			$where  = array('id_bank' =>$id);
			$data ['bank'] = $this->db->query("SELECT * FROM bank WHERE id_bank='$id'")->result();
			$this->load->view('templates_admin/header3');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_update_bank',$data);
			$this->load->view('templates_admin/footer');
		}

		public function update_bank_aksi(){
			$this->_rules();
			if ($this->form_validation->run() == FALSE)
			{
				$this->update_bank();
			}else{
				$id 					= $this->input->post('id_bank');
				$nama_bank 				= $this->input->post('nama_bank');
				$nomor_rekening 		= $this->input->post('nomor_rekening');

				$nama_bank2 				= $this->input->post('nama_bank2');
				$nomor_rekening2 		= $this->input->post('nomor_rekening2');

				$nama_bank3 				= $this->input->post('nama_bank3');
				$nomor_rekening3 		= $this->input->post('nomor_rekening3');

				$nama_bank4 				= $this->input->post('nama_bank4');
				$nomor_rekening4 		= $this->input->post('nomor_rekening4');

				$pemilik 				= $this->input->post('pemilik');
				

				$data 	= array (
					'nama_bank' 		=> $nama_bank,
					'nomor_rekening' 	=> $nomor_rekening,

					'nama_bank2' 		=> $nama_bank2,
					'nomor_rekening2' 	=> $nomor_rekening2,

					'nama_bank3' 		=> $nama_bank3,
					'nomor_rekening3' 	=> $nomor_rekening3,

					'nama_bank4' 		=> $nama_bank4,
					'nomor_rekening4' 	=> $nomor_rekening4,

					
					'pemilik' 	=> $pemilik
				);
				$where = array (
					'id_bank' => $id
				);
				$this->rental_model->update_data('bank',$data,$where);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible 	 fade show" role="alert">
				  Data Mobil Berhasil Diupdate!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
				 </button>
				</div>');																		
				redirect('admin/data_bank');
			}
		}



		public function _rules()
		{
			$this->form_validation->set_rules('nama_bank','Nama_bank','required');
			$this->form_validation->set_rules('nomor_rekening','Nomor_rekening','required');

			$this->form_validation->set_rules('nama_bank2','Nama_bank2','required');
			$this->form_validation->set_rules('nomor_rekening2','Nomor_rekening2','required');

			$this->form_validation->set_rules('nama_bank3','Nama_bank3','required');
			$this->form_validation->set_rules('nomor_rekening3','Nomor_rekening3','required');

			$this->form_validation->set_rules('nama_bank4','Nama_bank4','required');
			$this->form_validation->set_rules('nomor_rekening4','Nomor_rekening4','required');

			$this->form_validation->set_rules('pemilik','Pemilik','required');
			
		}

		public function delete_bank($id)
		{
			$where = array ('id_bank' => $id);
			$this->rental_model->delete_data($where, 'bank');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible 	 fade show" role="alert">
				  Data Bank Berhasil Dihapus!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
				 </button>
				</div>');																		
				redirect('admin/data_bank');
		}
	}

		

 ?>