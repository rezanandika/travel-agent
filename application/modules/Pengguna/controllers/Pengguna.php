<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');


class Pengguna extends CI_Controller {

	function __construct() {
    parent::__construct();

    $this->redirect_url = 'Pengguna';
    $this->load->model('M_pengguna');
    $this->load->library('session');

    if(empty($this->session->userdata('username'))){
        header('location: '.base_url());
    }

    }

    public function index(){

    }

    public function Pengguna_Admin(){

        $data['user'] = $this->M_pengguna->ambil_admin();
        
        $this->load->view('Template/Header');
        $this->load->view('Pengguna_admin', $data);
        $this->load->view('Template/Footer');
    }

    public function Pengguna_Pengemudi(){

        if($this->session->userdata('hak_akses') == 2){
            $data['user'] = $this->M_pengguna->ambil_sess_pengemudi();
        }else{
            $data['user'] = $this->M_pengguna->ambil_pengemudi();
        }
        $this->load->view('Template/Header');
        $this->load->view('Pengguna_pengemudi', $data);
        $this->load->view('Template/Footer');
    }
    

    public function insert_admin(){

        $nama = $_POST['insnama'];
        $username = $_POST['insusername'];
        $password = $_POST['inspassword'];

        $data = array( 
            'nama'	=>  $nama , 
            'username'=>  $username, 
            'password'	=>  $password,
            'hak_akses' => 1,
            'status' => 1
        );

        $cek = $this->M_pengguna->cek_insert_admin();

        if($cek > 0){
            $this->session->set_flashdata('error', 'Data Gagal Ditambahkan, Username Sudah Ada');
        }else{
            $this->db->insert('users', $data);
            $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        }

        redirect('Pengguna/Pengguna_admin', 'refresh');

    }

    public function insert_pengemudi(){

        $nama = $_POST['insnama'];
        $username = $_POST['insusername'];
        $password = $_POST['inspassword'];

        $data = array( 
            'nama'	=>  $nama , 
            'username'=>  $username, 
            'password'	=>  $password,
            'hak_akses' => 2,
            'status' => 1
        );

        $cek = $this->M_pengguna->cek_insert_pengemudi();

        if($cek > 0){
            $this->session->set_flashdata('error', 'Data Gagal Ditambahkan, Username Sudah Ada');
        }else{
            $this->db->insert('users', $data);
            $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        }

        redirect('Pengguna/Pengguna_pengemudi', 'refresh');

    }

    public function update_admin(){
        $id = $_POST['id'];
        $nama = $_POST['updnama'];
        $username = $_POST['updusername'];
        $password = $_POST['updpassword'];
     
        $data = array(
            'nama'	=>  $nama , 
            'username'=>  $username, 
            'password'	=>  $password,
            'hak_akses' => 1,
            'status' => 1
        );
     
        $where = array(
            'id_user' => $id
        );

        $this->M_pengguna->update($where,$data,'users');
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('Pengguna/Pengguna_admin', 'refresh');
    }

    public function update_pengemudi(){
        $id = $_POST['id'];
        $nama = $_POST['updnama'];
        $username = $_POST['updusername'];
        $password = $_POST['updpassword'];
     
        $data = array(
            'nama'	=>  $nama , 
            'username'=>  $username, 
            'password'	=>  $password,
            'hak_akses' => 2,
            'status' => 1
        );
     
        $where = array(
            'id_user' => $id
        );

        $this->M_pengguna->update($where,$data,'users');
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('Pengguna/Pengguna_pengemudi', 'refresh');
    }

    public function hapus_admin($id){
		$where = array('id_user' => $id);
        $this->M_pengguna->hapus($where,'users');
        $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		redirect('Pengguna/Pengguna_admin', 'refresh');
    }
    
    public function hapus_pengemudi($id){
		$where = array('id_user' => $id);
        $this->M_pengguna->hapus($where,'users');
        $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		redirect('Pengguna/Pengguna_pengemudi', 'refresh');
	}
 

}
?>
