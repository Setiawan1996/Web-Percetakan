<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model("produk_model");
	// }
public function index()
{    
    	$config['base_url']     = base_url('customer/dashboard');
        $config['total_rows']   = $this->db->count_all('mobil');
        $config['per_page']     = 6;
        $config['start']         = $this->uri->segment(4);
        $config['uri_segment']  = 4;
        $choice                 = $config['per_page'];
        
        $config["num_links"]    = floor($choice);

       
        $this->pagination->initialize($config);
        $data['page']           = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['mobil']          = $this->pagination_model->get_data($config['per_page'],$config['start'])->result();

        // $data['pagination']     = $this->pagination->create_links();
    $data['slide_baru']	= $this->rental_model->get_data('slide_baru')->result();
	$data['slide_baru'] = $this->rental_model->get_slider(array('gambar' => 1))->result();
	$data['slide'] 	= $this->rental_model->get_slider(array('gambar' => 1))->result();
	// $data['type']	= $this->rental_model->get_data('type')->result();
	// $data['mobil']	= $this->rental_model->get_data('mobil')->result();
	$data['slide']	= $this->rental_model->get_data('slide')->result();
	$data['artikel']= $this->rental_model->get_data('artikel')->result();
	// $key			= $this->input->post('key',true);
	// $data['mobil']	= $this->search_model->set($key);  
$data['link'] = $this->rental_model->get_data('link')->result();

    $this->load->view('templates_customer2/header');
    $this->load->view('customer/dashboard',$data);
    $this->load->view('templates_customer2/footer');

}

	public function home()
	{	
	// $produk	=$this->produk_model->index();
	// $data 	=array('mobil' =>$produk);
	$data['slide_baru']	= $this->rental_model->get_data('slide_baru')->result();
	$data['slide_baru'] = $this->rental_model->get_slider(array('gambar' => 1))->result();
	$data['slide'] 	= $this->rental_model->get_slider(array('gambar' => 1))->result();
	$data['type']	= $this->rental_model->get_data('type')->result();
	$data['mobil']	= $this->rental_model->get_data('mobil')->result();
	$data['slide']	= $this->rental_model->get_data('slide')->result();
	$data['artikel']= $this->rental_model->get_data('artikel')->result();
	$key			= $this->input->post('key',true);
	$data['mobil']	= $this->search_model->set($key);
	$data['type']	= $this->search_model->set($key);
	$this->load->view('templates_customer/header');
	$this->load->view('customer/dashboard',$data);
	$this->load->view('templates_customer/footer');
	}

	public function detail_artikel($id)
{
	$data['detail'] = $this->rental_model->ambil_id_artikel($id);
	
	$this->load->view('templates_customer2/header');
	$this->load->view('customer/detail_artikel',$data);
	$this->load->view('templates_customer2/footer');

}
	
	}


?>