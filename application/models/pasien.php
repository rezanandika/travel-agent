<?php 

class pasien extends CI_Model{
	function ambil_data(){
		return $this->db->get('pasien');
	}
} ?>