<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Hello extends CI_Controller {
	public function __construct(){

		parent:: __construct();
		$this->load->helper("url");
		$this->load->model('dokter');
		$this->load->model('pasien');
		$this->load->library('pagination');
	}

	public function index(){

		$this->load->library('pagination');

		/*$data['dokter'] = $this->db->get('dokter', 5, $offset); 
		//$data['dokter'] = $this->dokter->ambil_data()->result();
		
		//$config['base_url'] = 'hello/';
		$config['total_rows'] = $this->db->count_all('dokter');
        $config['per_page'] = 5;
        $config['num_link'] = 2;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $this->pagination->initialize($config);

		$this->load->view('hello', $data);*/
		//$data['dokter'] = $this->dokter->ambil_data($offset, $limit);
        $data['count'] = $this->dokter->ambil_data(); 

		$config = array();
        $config["base_url"] = base_url() . "index.php/hello";
        $config["total_rows"] = $this->db->count_all('dokter');
        $config["per_page"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->dokter->
            get_dokter($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("hello", $data);



	}

	public function data(){

		$data['pasien'] = $this->pasien->ambil_data()->result();
		$this->load->view('data', $data);
	}

	public function data1(){

		$this->load->view('data1');
	}

}