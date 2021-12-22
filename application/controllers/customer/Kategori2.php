<?php 
	class Kategori2 extends CI_Controller{
		
		public function kemasan()
		{	

  //       $choice                 = $config["total_rows"] / $config['per_page'];
  //       $config["num_links"]    = floor($choice);
  //       
  //       $data['page']           = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	 // 	$data['type'] = $this->rental_model->get_data('type')->result();
		


		$this->load->library('pagination');
		$config['base_url']     = base_url('customer/kategori2/kemasan');
        $config['total_rows']   = $this->model_kategori->count_kemasan();
        $config['start']       	= $this->uri->segment(4);
        $config['per_page']     = 1; //jumlah data yg di tampilkan
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
         $config["num_links"]    = floor($choice);

        
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['kemasan'] = $this->model_kategori->data_kemasan( $config['start'],$config['per_page'])->result();
		// var_dump($data['kemasan']);
		// die;
		$this->load->view('templates_customer2/header');
		$this->load->view('customer/kemasan',$data);
		$this->load->view('templates_customer2/footer');

		}

		public function buku()
		{	
			$this->load->library('pagination');
		$config['base_url']     = base_url('customer/kategori2/buku');
        $config['total_rows']   = $this->model_kategori->count_buku();
        $config['start']       	= $this->uri->segment(4);
        $config['per_page']     = 2; //jumlah data yg di tampilkan
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
         $config["num_links"]    = floor($choice);

        
         $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['buku'] = $this->model_kategori->data_buku( $config['start'],$config['per_page'])->result();
		// var_dump($data['buku']);
		// die;
		$this->load->view('templates_customer2/header');
		$this->load->view('customer/buku',$data);
		$this->load->view('templates_customer2/footer');

		}


		 public function souvenir()
		{	
			$this->load->library('pagination');
		$config['base_url']     = base_url('customer/kategori2/souvenir');
        $config['total_rows']   = $this->model_kategori->count_souvenir();
        $config['start']       	= $this->uri->segment(4);
        $config['per_page']     = 2; //jumlah data yg di tampilkan
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
         $config["num_links"]    = floor($choice);

        
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['souvenir'] = $this->model_kategori->data_souvenir( $config['start'],$config['per_page'])->result();
		// var_dump($data['souvenir']);
		// die;
		$this->load->view('templates_customer2/header');
		$this->load->view('customer/souvenir',$data);
		$this->load->view('templates_customer2/footer');

		}

		public function kantor()
		{	
			$this->load->library('pagination');
		$config['base_url']     = base_url('customer/kategori2/kantor');
        $config['total_rows']   = $this->model_kategori->count_kantor();
        $config['start']       	= $this->uri->segment(4);
        $config['per_page']     = 2; //jumlah data yg di tampilkan
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
         $config["num_links"]    = floor($choice);

        
         $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['kantor'] = $this->model_kategori->data_kantor( $config['start'],$config['per_page'])->result();
		// var_dump($data['kantor']);
		// die;
		$this->load->view('templates_customer2/header');
		$this->load->view('customer/kantor',$data);
		$this->load->view('templates_customer2/footer');

		}

		public function promosi()
		{	
			$this->load->library('pagination');
		$config['base_url']     = base_url('customer/kategori2/promosi');
        $config['total_rows']   = $this->model_kategori->count_promosi();
        $config['start']       	= $this->uri->segment(4);
        $config['per_page']     = 2; //jumlah data yg di tampilkan
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
         $config["num_links"]    = floor($choice);

        
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['promosi'] = $this->model_kategori->data_promosi( $config['start'],$config['per_page'])->result();
		// var_dump($data['promosi']);
		// die;
		$this->load->view('templates_customer2/header');
		$this->load->view('customer/promosi',$data);
		$this->load->view('templates_customer2/footer');

		}

		public function banner()
		{	
			$this->load->library('pagination');
		$config['base_url']     = base_url('customer/kategori2/banner');
        $config['total_rows']   = $this->model_kategori->count_banner();
        $config['start']       	= $this->uri->segment(4);
        $config['per_page']     = 2; //jumlah data yg di tampilkan
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
         $config["num_links"]    = floor($choice);

        
         $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['banner'] = $this->model_kategori->data_banner( $config['start'],$config['per_page'])->result();
		// var_dump($data['banner']);
		// die;
		$this->load->view('templates_customer2/header');
		$this->load->view('customer/banner',$data);
		$this->load->view('templates_customer2/footer');

		}

		public function textile()
		{	
			$this->load->library('pagination');
		$config['base_url']     = base_url('customer/kategori2/textile');
        $config['total_rows']   = $this->model_kategori->count_textile();
        $config['start']       	= $this->uri->segment(4);
        $config['per_page']     = 2; //jumlah data yg di tampilkan
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
         $config["num_links"]    = floor($choice);

        
         $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['textile'] = $this->model_kategori->data_textile( $config['start'],$config['per_page'])->result();
		// var_dump($data['textile']);
		// die;
		$this->load->view('templates_customer2/header');
		$this->load->view('customer/textile',$data);
		$this->load->view('templates_customer2/footer');

		}

		public function index(){
	$data['type'] = $this->rental_model->get_data('type')->result();
	$data['mobil'] = $this->rental_model->get_data('mobil')->result();
	$key = $this->input->post('key',true);
		$data['mobil'] = $this->search_model->set($key);
	$this->load->view('templates_customer2/header');
	$this->load->view('customer/kategori2',$data);
	$this->load->view('templates_customer2/footer');

}

		public function tambah_keranjang($id)
{
	$mb = $this->rental_model->find($id);

	$data = array(
		'id' 		=> $mb->id_mobil,
		'qty'		=> 1,
		'price'		=> $mb->harga,
		'name'		=> $mb->produk
	);
	$this->cart->insert($data);
	// $this->load->view('templates_customer/header');
	// $this->load->view('dashboard/tambah_keranjang');
	// $this->load->view('templates_customer/footer');
	redirect('customer/kategori2');
}
public function hapus_keranjang(){
	$this->cart->destroy();
	redirect('customer/katagori2');
}

	}
?>

