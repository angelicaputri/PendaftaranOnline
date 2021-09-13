<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function all(){
		return $this->db->get('user')->result_array();
	}
	
	public function find($user_id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('user_id', $user_id)
		->limit(1)
		->get('user');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function create($data_siswa){
		//Query INSERT INTO
		$this->db->insert('user', $data_siswa);
	}

	public function update($user_id, $data_siswa){
		//Query UPDATE FROM ... WHERE id=...
		$this->db->where('user_id', $user_id)
		->update('user', $data_siswa);
	}
	
	public function delete($user_id){
		//Query DELETE ... WHERE id=...
		$this->db->where('user_id', $user_id)
		->delete('user');
	}

	public function findByUsername($usernameU){
		return $this->db
		->where('usernameU', $usernameU)
		->get('user')->row_array();
	}

	public function findByNIK($nik){
		return $this->db
		->where('nik', $nik)
		->get('user')->row_array();
	}

	public function akhirHasil(){
		return $this->db->get('nilai')->result_array();
	}

	public function upNilai($user){
		$this->db->update('user',$user,array('user_id'=>$user['user_id']));
	}

	public function upBukti($user){
		$this->db->update('user',$user,array('usernameU'=>$user['usernameU']));
	}
}