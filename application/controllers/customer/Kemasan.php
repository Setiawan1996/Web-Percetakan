<?php 
	define('BASEPATH') OR exit ('No direct script access allowed');

	/**
	 * 
	 */
	class Kemasan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('produk_model');
		}
		public function index()
		{
			$produk = $this->produk_model->index();
			$data = array('produk' => $produk);
			$this->load->view('templates_customer2/header');
		    $this->load->view('customer/kemasan',$data);
		    $this->load->view('templates_customer2/footer');
		}
		public function load()
		{
			$produk = $this->produk_model->load();
			$data	= array('produk' =>$produk);
			$this->load->view('templates_customer2/header');
		    $this->load->view('customer/kemasan',$data);
		    $this->load->view('templates_customer2/footer');
		}
	}

 ?>