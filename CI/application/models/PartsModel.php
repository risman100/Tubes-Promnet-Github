<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PartsModel extends CI_Model{


		public function insertPart($data){
			$this->db->insert('parts',$data);
		}

		public function getData(){
<<<<<<< HEAD

			return $this->db->query('SELECT parts.id_part,kode_part, nama_part, harga_ref_part from parts, href_parts WHERE parts.id_part = href_parts.id_part');

		}

		public function search($nama_part){
			$this->db->select('*');
			$this->db->form('parts');
			$this->db->like('nama_part', $nama_part);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
				return $query->result();
			}else{
				return $query->result();
			}
		}

		public function getAll(){
			$this->db->select('*');
			$this->db->from('parts');
			return $this->db->get();
=======
			return $this->db->query('SELECT parts.id_part,kode_part, nama_part, harga_ref_part from parts, href_parts WHERE parts.id_part = href_parts.id_part');
>>>>>>> 53c7e192fb48c2f2f9c664967e35fa8662072da8
		}

		public function getDatum($id_part){
			return $this->db->query('SELECT kode_part, nama_part, harga_ref_part from parts, href_parts WHERE parts.id_part = href_parts.id_part , parts.id_part = '.$id_part);	
		}



	}


 ?>