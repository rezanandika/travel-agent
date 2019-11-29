<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');


class Pemesanan extends CI_Controller {

	function __construct() {
    parent::__construct();

    $this->redirect_url = 'Pemesanan';
    $this->load->model('M_pemesanan');
    $this->load->library('session');

    if(empty($this->session->userdata('username'))){
        header('location: '.base_url());
    }

    }

    public function index(){

    }

    public function Pemesanan_baru(){

        $data['pemesananbaru'] = $this->M_pemesanan->pemesanan_baru();
        
        $this->load->view('Template/Header');
        $this->load->view('Pemesanan_baru', $data);
        $this->load->view('Template/Footer');
    }

    public function Pemesanan_diterima(){

        $data['pemesananditerima'] = $this->M_pemesanan->pemesanan_diterima();
        
        $this->load->view('Template/Header');
        $this->load->view('Pemesanan_diterima', $data);
        $this->load->view('Template/Footer');
    }

    public function Cari_pemesanan_diterima(){

        $this->load->model('Pengguna/M_pengguna');
        $this->load->model('Kota_asal/M_kota_asal');
        $this->load->model('Kota_tujuan/M_kota_tujuan');

        $data['caripemesananditerima'] = $this->M_pemesanan->cari_pemesanan_diterima();
        $data['caripengemudi'] = $this->M_pengguna->ambil_pengemudi();
        $data['kota_asal'] = $this->M_kota_asal->ambil_kota();
        $data['kota_tujuan'] = $this->M_kota_tujuan->ambil_kota();

        if(count($data['caripemesananditerima']) > 0){
        
        $this->load->view('Cari_pesanan_diterima', $data); 
        }else{
            echo "<div style='text-align: center'><a> -- Data Tidak Ditemukan -- </a></div>";
        }
    }
    

    public function insert_jadwal(){

        $this->load->model('Jadwal_berangkat/M_jadwal_berangkat');

        $idpemesanan = $_POST['idpemesanan'];
        $tanggalberangkat = $_POST['tanggalberangkat'];
        $jamberangkat = $_POST['jamberangkat'];
        $kotaasal = $_POST['kotaasal'];
        $kotatujuan = $_POST['kotatujuan'];
        $pengemudi = $_POST['pengemudi'];
        $cek = $_POST['cek'];
        $kodejadwal = $this->db->query("SELECT MAX(kode_jadwal) as kode_jadwal from jadwal_berangkat")->row();
        $jumlahpemesanan = $_POST['jumlahpemesanan'];
        $status = 1;

        $arr = array();
        foreach ($idpemesanan as $key => $id) {
            if(isset($cek[$key]) == 1){

            array_push($arr, 
                    array(
                        'id_pemesanan' => $id, 
                        'tanggal_berangkat' => $tanggalberangkat[$key], 
                        'jam_berangkat' => $jamberangkat[$key], 
                        'id_pengemudi' => $pengemudi, 
                        'id_kota_asal' => $kotaasal[$key],
                        'id_kota_tujuan' => $kotatujuan[$key],
                        'kode_jadwal' => $kodejadwal->kode_jadwal+1,
                        'jumlah_pemesanan' => $jumlahpemesanan[$key],
                        'status' => 1
                        
                    ));         
            }
          }
        $this->db->insert_batch('jadwal_berangkat', $arr);

        foreach ($idpemesanan as $key => $id) {
            if(isset($cek[$key]) == 1){

                $menuData = array(
                    'id_pemesanan'         => $id,
                    'status'     => intval($status),
                    'id_pengemudi' => $pengemudi,
                    
                );
                $this->db->where('id_pemesanan', $id);
                $this->db->update('pemesanan', $menuData);
            }

        }

        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');

        redirect('Pemesanan/Pemesanan_diterima');

    }

    public function update_pemesanan_baru(){
        $id = $_POST['id'];
        $status = $_POST['status'];
     
        $data = array(
            'status'	=>  $status, 
        );
     
        $where = array(
            'id_pemesanan' => $id
        );

        $this->M_pemesanan->update($where,$data,'pemesanan');
        $this->session->set_flashdata('success', 'Data Berhasil Diproses');
        redirect('Pemesanan/Pemesanan_baru', 'refresh');
    }

    public function update_pemesanan_diterima(){
        $idpemesanan = $_POST['updid'];
        $namapemesan = $_POST['updnamapemesan'];
        $telepon = $_POST['updtelepon'];
        $tanggalberangkat = $_POST['updtanggalberangkat'];
        $jamberangkat = $_POST['updjamberangkat'];
        $kotaasal = $_POST['updkotaasal'];
        $kotatujuan = $_POST['updkotatujuan'];
        $jumlahpemesanan = $_POST['updjumlah'];
        $pengemudi = $_POST['updpengemudi'];
     
        $data = array(
            'nama_pemesan' => $namapemesan,
            'telepon' => $telepon,
            'tanggal_berangkat' => $tanggalberangkat, 
            'jam_berangkat' => $jamberangkat, 
            'id_kota_asal' => $kotaasal,
            'id_kota_tujuan' => $kotatujuan,
            'jumlah_pemesanan' => $jumlahpemesanan,
            'id_pengemudi' => $pengemudi, 
        );
     
        $where = array(
            'id_pemesanan' => $idpemesanan
        );

        $this->M_pemesanan->update($where,$data,'pemesanan');
        $this->session->set_flashdata('success', 'Data Berhasil Diproses');
        redirect('Pemesanan/Pemesanan_diterima', 'refresh');
    }

    // public function hapus_admin($id){
	// 	$where = array('id_user' => $id);
    //     $this->M_pengguna->hapus($where,'users');
    //     $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
	// 	redirect('Pengguna/Pengguna_admin', 'refresh');
    // }
    
    // public function hapus_pengemudi($id){
	// 	$where = array('id_user' => $id);
    //     $this->M_pengguna->hapus($where,'users');
    //     $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
	// 	redirect('Pengguna/Pengguna_pengemudi', 'refresh');
	// }
 

}
?>
