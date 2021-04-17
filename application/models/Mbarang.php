<?php

class Mbarang extends CI_Model
{
	function tampil_barang(){

		$getAll = $this->db->get("barang");
		$data = $getAll->result_array();
		return $data;
	}
	function simpan($data){
		$this->db->insert("barang",$data);
	}
	function get_id(){
		$this->db->select_max('kode');
		$res= $this->db->get('barang')->row_array()['kode'];
		return $res;
	}

	function select_barang($kode){
		$this->db->where("kode",$kode);
		$get = $this->db->get("barang");
		$data = $get->row_array();
		return $data;
	}

	function edit($kode,$data){
		$this->db->where("kode",$kode);
		$this->db->update("barang",$data);
	}

	function delete_barang($kode){
		$this->db->where("kode",$kode);
		$this->db->delete("barang");
		redirect('barang');
	}

}

?>