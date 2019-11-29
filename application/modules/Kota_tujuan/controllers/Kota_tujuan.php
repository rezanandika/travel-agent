<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');


class Kota_tujuan extends CI_Controller {

	function __construct() {
    parent::__construct();

    $this->redirect_url = 'Kota_tujuan';
    $this->load->model('M_kota_tujuan');
    $this->load->library('session');

    if(empty($this->session->userdata('username'))){
        header('location: '.base_url());
    }

    }

    public function index(){
        $data['kota_tujuan'] = $this->M_kota_tujuan->ambil_kota();
        
        $this->load->view('Template/Header');
        $this->load->view('Kota_tujuan', $data);
        $this->load->view('Template/Footer');
    }

    public function insert(){

        $kota = $_POST['inskota'];

        $data = array( 
            'nama_kota_tujuan'	=>  $kota , 
        );

        $cek = $this->M_kota_tujuan->cek_kota();

        if($cek > 0){
            $this->session->set_flashdata('error', 'Data Gagal Ditambahkan, Kota Sudah Ada');
        }else{
            $this->db->insert('kota_tujuan', $data);
            $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        }

        redirect('Kota_tujuan', 'refresh');

    }

    public function update(){
        $id = $_POST['id'];
        $kota = $_POST['updnamakota'];
     
        $data = array(
            'nama_kota_tujuan'	=>  $kota , 
        );
     
        $where = array(
            'id_kota_tujuan' => $id
        );

        $this->M_kota_tujuan->update($where,$data,'kota_tujuan');
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('Kota_tujuan', 'refresh');
    }

    public function hapus($id){
		$where = array('id_kota_tujuan'=> $id);
        $this->M_kota_tujuan->hapus($where,'kota_tujuan');
        $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		redirect('Kota_tujuan', 'refresh');
    }
 

}
?>
