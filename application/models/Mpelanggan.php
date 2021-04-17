<?php

class Mpelanggan extends CI_Model
{
	function tampil_pelanggan(){

		$getAll = $this->db->get("pelanggan");
		$data = $getAll->result_array();
		return $data;
	}
	function simpan($data){
		$this->db->insert("pelanggan",$data);
	}
	function get_id(){
		$this->db->select_max('id_pelanggan');
		$res= $this->db->get('pelanggan')->row_array()['id_pelanggan'];
		return $res;
	}

	function select_pelanggan($id_pelanggan){
		$this->db->where("id_pelanggan",$id_pelanggan);
		$get = $this->db->get("pelanggan");
		$data = $get->row_array();
		return $data;
	}

	function edit($id,$data){
		$this->db->where("id_pelanggan",$id);
		$this->db->update("pelanggan",$data);
	}

	function delete_pelanggan($id){
		$this->db->where("id_pelanggan",$id);
		$this->db->delete("pelanggan");
	}
}

?>