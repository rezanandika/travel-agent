<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');


class Beranda extends CI_Controller {

	function __construct() {
    parent::__construct();

    $this->redirect_url = 'Beranda';
		$this->load->library('session');

        if(empty($this->session->userdata('username'))){
            header('location: '.base_url());
        }
        if(!isset($_SESSION['username'])) {
               include_once("Login.php");
               exit;
        }

    }

    public function index(){

        $this->load->view('Template/Header');
        if($this->session->userdata('hak_akses') == 1){
        $this->load->view('Beranda');
        }elseif($this->session->userdata('hak_akses') == 2){
        $this->load->view('Beranda/Beranda_pengemudi');
        }
        $this->load->view('Template/Footer');

  }

}
?>
