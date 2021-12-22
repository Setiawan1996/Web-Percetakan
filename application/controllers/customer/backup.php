<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk2 extends CI_Controller {

public function pagination()
{    
    // jangan di index
        $config['base_url']     = base_url('customer/produk2/pagination');
        $config['total_rows']   = $this->db->count_all('mobil');
        $config['per_page']     = 6;
        $config['start']         = $this->uri->segment(4);
        $config['uri_segment']  = 4;
        $choice                 = $config["total_rows"] / $config['per_page'];
        $config["num_links"]    = floor($choice);

        $config['first_link']           ='First';
        $config['last_link']            ='Last';
        $config['next_link']            ='Next';
        $config['prev_link']            ='Prev';
        $config['full_tag_open']        ='<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_clode']       ='</ul></nav></div>';
        $config['num_tag_open']         ='<li class="page-item"><span class="page-link">';
        $config['num_tag_close']        ='</span></li>';
        $config['cur_tag_open']         ='<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']        ='</span></li>';
        $config['next_tag_open']        ='<li class="page-item"><span class="page-link">';
        $config['next_tag_close']       ='<span aria-hidden="true">&raquo</span></li>';
        $config['prev_tag_open']        ='<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']       ='</span></li>';
        $config['first_tag_open']       ='<li class="page-item"><span class="page-link">';
        $config['first_tag_close']      ='</span></li>';
        $config['last_tag_open']        ='<li class="page-item"><span class="page-link">';
        $config['last_tag_close']       ='</span></li>';

        $this->pagination->initialize($config);
        $data['page']           = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['mobil']          = $this->pagination_model->get_data($config['per_page'],$config['start'])->result();
        $data['pagination']     = $this->pagination->create_links();

    $data['type'] = $this->rental_model->get_data('type')->result();
    // $data['mobil'] = $this->rental_model->get_data('mobil')->result();
    // $data['mobil'] = $this->rental_model->get_data_produk(2,8)->result();
    // $key = $this->input->post('key',true);
    // $data['mobil'] = $this->search_model->set($key);
    $this->load->view('templates_customer2/header');
    $this->load->view('customer/produk2',$data);
    $this->load->view('templates_customer2/footer');

}
    

}
