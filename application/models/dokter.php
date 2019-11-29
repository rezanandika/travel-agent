<?php 

class dokter extends CI_Model{
/*	function ambil_data(){

		return $this->db->count_all('dokter');
	}

	public function fetch_dokter($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("dokter");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }*/

public function ambil_data() {
        return $this->db->count_all("dokter");
    }

    public function get_dokter($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("dokter");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

	/*public function get_dokter($limit, $start) {
      $this->db->limit($limit, $start);
      $query = $this->db->get("dokter");
      if ($query->num_rows() > 0) {
        return $query->result_array();
      }
      return false;
   }*/

} ?>