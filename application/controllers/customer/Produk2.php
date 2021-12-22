<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk2 extends CI_Controller {

public function id()
{    
    // jangan di index
        $config['base_url']     = base_url('customer/produk2/id');
        $config['total_rows']   = $this->db->count_all('mobil');
        $config['per_page']     = 6;
        $config['start']         = $this->uri->segment(4);
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
        // $config['full_tag_close']       ='</li></ul>';

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
    public function index()
    {
        
        
        $key = $this->input->post('key',true);
        $data['mobil'] = $this->search_model->set($key);
        $this->load->view('templates_customer2/header');
        $this->load->view('customer/produk2',$data);
        $this->load->view('templates_customer2/footer');
        }

}
