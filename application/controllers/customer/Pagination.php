<!-- <?php defined('BASEPATH') OR exit ('No direct script access allowed');

class produk2 extends CI_Controller {

    public function index()
    {
    	$config['base_url']		= site_url( 'produk2/index');
    	$config['total_rows']	= $this->db->count_all('mobil');
    	$config['per_page'] 	= 3;
    	$config['uri_segmen']	= 3;
    	$choice					= $config["total_rows"] / $config['per_page'];
    	$config["num_links"]	= floor($choice);

    	$this->pagination->initialize($config);
    	$data['page']			= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    	$data['data']			= $this->rental_model->get_data($config["per_page"],$data['page'])->result();
    	$data['pagination']		= $this->pagination->create_links();

    	$data['type'] 			= $this->rental_model->get_data('type')->result();
		$data['mobil']			= $this->rental_model->get_data('mobil')->result();
		$this->load->view('templates_customer2/header');
		$this->load->view('customer/produk2',$data);
		$this->load->view('templates_customer2/footer');
    }
//    public function pagination()
//      {
//           $this->load->library('pagination');
//           $config['base_url'] = base_url('welcome');
//           $config['total_rows']    = count($this->pagination_model->total_berita());
//           $config['per_page']      = 4;
//           $config['uri_segmen']    =3;
//           // start limit
//           $limit    = $config['per_page'];
//           $start    = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
//           // .......
//           $config['first_link']              = 'First';
//           $config['last_link']               = 'Last';
//           $config['next_link']               = 'Next';
//           $config['last_link']               = 'Last';
//           $config['prev_link']               = 'Prev';
//           $config['full_tag_open']      = '<div class="text-center"><ul>';
//           $config['num_tag_open']            = '<li>';
//           $config['num_tag_close']      = '</li>';
//           $config['cur_tag_open']            = '<li class="page-item"><a>';
//           $config['cur_tag_close']      = '</a></li>';
//           $config['next_tag_open']      = '<li>';
//           $config['next_tag_close']          = '</li>';          
//           $config['prev_tag_open']      = '<li>';
//           $config['prev_tag_close']          = '</li>';
//           $config['first_tag_open']          = '<li>';
//           $config['first_tag_close']         = '</li>';
//           $config['full_tag_close']          = '</ul></div>';
//           // .............
//           $this->pagination->initialize($config);
//           $data = array(
//                'paginasi'     => $this->pagination->create_links(),
//                'produk'  => $this->pagination_model->produk($limit,$start),
//           );      
//      $this->load->view('templates_customer2/header');
//      $this->load->view('customer/produk2',$data);
//      $this->load->view('templates_customer2/footer');
//      }
// }

}
?> -->




<?php
class pagination extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function fetch_data($limit, $offset)
	{
		$this->db->limit($limit, $offset);
		$data = $this->db->get("dborang");
		return $data->result();
 
	}
}
?>