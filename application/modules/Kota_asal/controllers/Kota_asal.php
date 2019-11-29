<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');


class Kota_asal extends CI_Controller {

	function __construct() {
    parent::__construct();

    $this->redirect_url = 'Kota_asal';
    $this->load->model('M_kota_asal');
    $this->load->library('session');

    if(empty($this->session->userdata('username'))){
        header('location: '.base_url());
    }

    }

    public function index(){
        $data['kota_asal'] = $this->M_kota_asal->ambil_kota();
        
        $this->load->view('Template/Header');
        $this->load->view('Kota_asal', $data);
        $this->load->view('Template/Footer');
    }

    public function insert(){

        $kota = $_POST['inskota'];

        $data = array( 
            'nama_kota_asal'	=>  $kota , 
        );

        $cek = $this->M_kota_asal->cek_kota();

        if($cek > 0){
            $this->session->set_flashdata('error', 'Data Gagal Ditambahkan, Kota Sudah Ada');
        }else{
            $this->db->insert('kota_asal', $data);
            $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        }

        redirect('Kota_asal', 'refresh');

    }

    public function update(){
        $id = $_POST['id'];
        $kota = $_POST['updnamakota'];
     
        $data = array(
            'nama_kota_asal'	=>  $kota , 
        );
     
        $where = array(
            'id_kota_asal' => $id
        );

        $this->M_kota_asal->update($where,$data,'kota_asal');
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('Kota_asal', 'refresh');
    }

    public function hapus($id){
		$where = array('id_kota_asal'=> $id);
        $this->M_kota_asal->hapus($where,'kota_asal');
        $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		redirect('Kota_asal', 'refresh');
    }
 

}
?>
